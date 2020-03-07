<?php

namespace App\Http\Controllers;

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
        $emailQ = $request->get('email');
        $passQ = Hash::make($request->get('password'));
        $emailQ = 'asd@sd.vs';
        $passQ = '$2y$10$0BL4UZmQ0X9tXu2PgV.UtebS0Bp7/3QKPYwHD2Yk8BRtGeDKPVdL.';
        $queryUser = DB::table('users')->select('*')->where('email', '=', $emailQ)->where('password', '=', $passQ)->first();
        if ($queryUser) {
            # code...   
            
            // echo $queryUser->email;
            // dd($queryUser);
            // print_r($queryUser);
            // die();
            // $request->session()->put('info', $queryUser);
            $reqInfo = $request->session()->get('info');
            // $result = json_decode($reqInfo, true);
            dd( $reqInfo->email);
        }
        else {
            echo 'hi';
        }
    }
}