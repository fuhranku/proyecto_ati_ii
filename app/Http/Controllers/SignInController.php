<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
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
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);
        // dd($credentials);
        $emailQ = $request->get('email');
        $passQ = Hash::make($request->get('password'));
        /*$emailQ = 'asd@sd.vs';
        $passQ = '$2y$10$0BL4UZmQ0X9tXu2PgV.UtebS0Bp7/3QKPYwHD2Yk8BRtGeDKPVdL.';*/
        $queryUser = DB::table('users')->select('*')->where('email', '=', $emailQ)->where('password', '=', $passQ)->first();
        if ($queryUser->person_type == 'nat') {
            $queryUserSpe = DB::table('naturalPeople')->select('*')->where('user_id', '=', $queryUser->id)->first();

        } else {
            $queryUserSpe = DB::table('legalPeople')->select('*')->where('user_id', '=', $queryUser->id)->first();

            # code...
        }
        
        if ($queryUser) {
            # code...   
            
            // echo $queryUser->email;
            // dd($queryUser);
            // print_r($queryUser);
            // die();
            // $request->session()->put('info', $queryUser);
            // session(['info' => $queryUser]);
            Session::put('info', $queryUser);
            Session::put('info_specific', $queryUserSpe);
            $sessionInfo = Session::get('info');
            // echo $sessionInfo->email;
            // dd($sessionInfo);
            return redirect('about_us');
            // $reqInfo = $request->session()->get('info');
            // $result = json_decode($reqInfo, true);
            // dd( $reqInfo->email);
        }
        else {
            echo 'hi';
        }
    }

    public function getSessionInfo()
    {
        return session('info');
    }
    public function logout()
    {
        // Session::forget('info');
        // Session::forget('info_specific');
        Session::flush();
    }
}