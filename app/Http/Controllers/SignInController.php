<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
use App\Models\Sign_up\User;
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
                return redirect()->back()
                        ->withErrors(['email' => 'Invalid input']);    
            }
        }
        else {
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
        Log::info('ruta');
        Log::info();
        return redirect("/index");
    }

    public function forgotForm(Request $request)
    {
        
        $validations['email'] = 'email|required|string';
        $validator = Validator::make($request->all(), $validations);
        if ($validator->fails()){          
            Session::put('error-login', true);
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::where('email', '=', $request->get('email'))->first();
        Session::put('forgot-error', false);
        if ($user == null) {
            Session::put('forgot-error', true);
            return redirect()->back()->withInput();
            
        }
    }

    public function forgotFormTel(Request $request)
    {
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string'
        ]);
        $validations['email'] = 'email|required|string';
        $validator = Validator::make($request->all(), $validations);
        
    }

    public function forgotFormDNI(Request $request)
    {
        $validations['email'] = 'email|required|string';
        $validator = Validator::make($request->all(), $validations);

    }

    public function forgot($userId, $token)
    {
        # code...
        Log::info($userId);
        Log::info($token);
        //Renovar contraseña

    }

    public function sendMail() {
   
        $details = [
            'title' => 'Usuario y link para restablecer contraseña de <nombre empresa>',
            'user' => 'usuario@gmail.com',
            'email' => 'yuliferna123@gmail.com',
            'body' => '',
            'url' =>/* 'http://' .*/ strval(request()->getHttpHost()) /*. '.com/' */. '/' . 'idUser' . '/' . 'token' 
        ];
       
        \Mail::to('yuliferna123@gmail.com')->send(new \App\Mail\PasswordReset($details));
       
        return redirect()->back();
    }
}