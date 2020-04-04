<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
use App\Models\Sign_up\User;
use App\Models\Sign_up\NaturalPerson;
use App\Models\Sign_up\LegalPerson;
use Requesting;
use Cookie;
use App;
use Session;
use Log;
use DB;

class SignInController extends Controller
{
    
    public function login(Request $request)
    {
        // Log::info('asdasasdd');
        // $credentials = $this->validate(request(), [
        //     'email' => 'email|required|string',
        //     'password' => 'required|string'
        // ]);
        $validations['email'] = 'email|required|string';
        $validations['password'] = 'required|string';
        
        //Validations
        $validator = Validator::make($request->all(), $validations);
        Session::put('error-login', false);
        // Log::info($validator->fails());
        if ($validator->fails()){          
            Session::put('error-login', true);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $emailQ = $request->get('email');
        $passQ = $request->get('password');
        
        $queryUser = DB::table('users')->select('*')->where('email', '=', $emailQ)->first();
        
        if ($queryUser) 
        {
            //comprobar password
            if (Hash::check($passQ, $queryUser->password)) {
                if ($queryUser->person_type == 'nat') {
                    $queryUserSpe = DB::table('naturalPeople')->select('*')->where('user_id', '=', $queryUser->id)->first();
                } else {
                    $queryUserSpe = DB::table('legalPeople')->select('*')->where('user_id', '=', $queryUser->id)->first();
                }
                
                Session::put('info', $queryUser);
                Session::put('info_specific', $queryUserSpe);
                $sessionInfo = Session::get('info');
                
                // return redirect()->back();
                return view('main_sections.index');
                
            }else {
                Session::put('error-login', true);

                return redirect()->back()
                        ->withErrors(['email' => 'Invalid input']);    
            }
        }
        else {
            Session::put('error-login', true);
            return redirect()->back()
            ->withErrors(['email' => 'Invalid input']);

        }
    }

    public function logout()
    {
        Session::forget('info');
        Session::forget('info_specific');
        // Session::flush();
        // echo 'hi';
        return redirect("/index");
    }

    public function forgotForm(Request $request)
    {
        Log::info('$request[type]');
        Log::info($request['type']);
        $infoUser= [
            'title' => '',
            'user' => '',
            'email' => '',
            'body' => '',
            'url' => '',
            'token' => ''

        ];
        $token =  Str::random(60);

        switch ($request['type']) {
            case 'email':
                # code...
                $validations['email_forgot'] = 'email|required|string';
                $validator = Validator::make($request->all(), $validations);
                if ($validator->fails()){
                    Log::info($validator->getMessageBag());
                    return response()->json(['errors'=>$validator->getMessageBag()]);
                }
                $user = User::where('email', '=', $request->get('email_forgot'))->first();
                
                if ($user == null) {
                    Log::info('usuario no encontrado');
                    $array =(object)['email_forgot' => array('User doesn\'t exist')];
                    
                    return response()->json([ 'errors' =>  $array ]);
                }
                if ($user->person_type == 'nat') {
                    # code...
                    $user_type = NaturalPerson::where('user_id', '=', $user->id)->first();
                    Log::info($user_type);
                    $name =$user_type->name . ' ' . $user_type->last_name;
                    $emailUser = $user_type->email;
                }else if ($user->person_type == 'jur') {
                    # code...
                    $user_type = LegalPerson::where('user_id', '=', $user->id)->first();
                    
                    $name = $user_type->name_comp;
                    $emailUser = $user_type->email_rep;
                }
                $infoUser['title'] = 'Usuario y link para restablecer contraseña de ' . $name;
                $infoUser['user'] = $emailUser;
                $infoUser['email'] = $user->email;
                $infoUser['url'] = strval(request()->getHttpHost()) . '/sign_in' . '/' . strval($user->id) . '/' . $token;
                $infoUser['token'] = $token;
                
                Session::put('infoUser', $infoUser);
                Log::info(Session::get('infoUser')['email']);

                return response()->json();
                break;
            case 'phone':
                $validations['phone'] = 'required|string';
                $validator = Validator::make($request->all(), $validations);
                if ($validator->fails()){          
                    return redirect()->back()->withErrors($validator)->withInput();
                }
                $user = User::where('email', '=', $request->get('email'))->first();
                // if ($userActual->person_type == 'nat') {
                //     // Log::info('nat');
                //     $userActualSpe = NaturalPerson::where('user_id', '=', $userActual->id)->first();
                // } else {
                //     // Log::info('jur');
        
                //     $userActualSpe = LegalPerson::where('user_id', '=', $userActual->id)->first();
                // }
                break;
            case 'id':
                # code...
                break;
            
            default:
                # code...
                break;
        }
        
        
    }

    public function forgot($userId, $token)
    {
        Log::info($userId);
        Log::info($token);
        $user = User::find($userId);
        $pass = DB::table('password_resets')->where('email', $user->email)->where('token', $token)->first();

        //Renovar contraseña
        if ($pass != null) {
            Log::info($token);
            Session::put('change-pass', true);
            Session::put('userId', $userId);
        }
        return redirect('index');
    }
    public function passwordInput(Request $request)
    {
        //change_pass
        Log::info($request['newPassword']);
        Log::info($request['confPassword']);
        Session::forget('change-pass', true);
        $validations['newPassword'] = 'required|string';
        $validations['confPassword'] = 'required|string';
        
        //Validations
        $validator = Validator::make($request->all(), $validations);

        if ($validator->fails()){          
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request['newPassword'] != $request['confPassword']) 
        {
            $array =(object)['change_pass' => array('It must be the same')];
            return response()->json([ 'errors' =>  $array ]);
        }
        //Actualizamos en BD el nuevo password
        $user = User::find(Session::get('userId'));
        $user->password = Hash::make($request['newPassword']);
        Log::info($user);
        $user->save();

        //Borramos la fila con el correo
        DB::table('password_resets')->where('email', $user->email)->delete();

        Session::forget('userId');
        return response()->json();

    }
    public function sendMail() {
        //User info
        $infoUser = Session::get('infoUser');
        Log::info($infoUser);
        Log::info($infoUser['url']);
        
        $details = [
            'title' => $infoUser['title'],
            'user' => $infoUser['user'],
            'email' => $infoUser['email'],
            'body' => $infoUser['body'],
            'url' => $infoUser['url'],
            'token' => $infoUser['token']
        ];
       
        \Mail::to($infoUser['email'])->send(new \App\Mail\PasswordReset($details));
        $lastupdated = date('Y-m-d H:i:s');
        DB::table('password_resets')->insert(
            ['email' => $infoUser['email'], 'token' => $infoUser['token'],
            'created_at' => $lastupdated]
        );
        // Session::forget('infoUser');
        return redirect()->back();
    }
}