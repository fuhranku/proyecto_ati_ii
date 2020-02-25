<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Requesting;
use Cookie;
use App;
use Session;
use App\User;

class SignUpController extends Controller
{
    public function sign_up_get(){
        // Cookie::queue('probando1', 'valorprobando1', 60);
        // Cookie::queue('probando2', 'valorprobando2', 60);
        // Cookie::queue('probando3', 'valorprobando3', 60);
        // $type = 'none';

        return view('main_sections.sign_up');
    }

    public function sign_up_get_person_type($type = 1){
        $step = 2;
        return view('main_sections.sign_up',compact("step","type"));
    }

    public function sign_up_post(Request $request, $step = 1){
       //$step = $request->input("step");
        Session::put('key',$request->get('found_us'));
        return view('main_sections.index');
    }

    public function store(Request $request){
        $step = $request->get('step');
        switch($step){
            case 0:
                $validator = Validator::make($request->all(), [
                    'found_us' => 'required',
                    
                ]);
                if ($validator->fails()){                
                    return response()->json(['errors'=>$validator->errors()->all()]);
                }
                return response()->json(['success'=>'holi']);
            break;
            case 1:
            break;
            case 2:
            break;
            case 3:
            break;
            case 4:
            break;
            case 5:
            break;
        }
        return response()->json(['success'=>'holi']);
    }

            // $request->validate([
        //     "found_us"=>'required',
        //     "person_type"=>'required',
        //     "first_name"=>'required',
        //     "last_name"=>'required',
        //     "user_id"=>'required',
        //     "email"=>'required',
        //     "person_country_of_origin"=>'required',
        //     "mobile_phone_number"=>'required',
        //     "landline_number"=>'required',
        //     "c_name"=>'required',
        //     "c_rif"=>'required',
        //     "c_country_of_origin"=>'required',
        //     "c_city"=>'required',
        //     "c_address"=>'required',
        //     "cr_full_name"=>'required',
        //     "cr_email"=>'required',
        //     "cr_mobile_phone_number"=>'required',
        //     "cr_landline_phone_number"=>'required',
        //     "web_language"=>'required',
        //     "log_in_email"=>'required',
        //     "log_in_password"=>'required',
        //     "frequency_bool"=>'required',
        //     "frequency_in_time"=>'required',
        //     "interest_services"=>'required',
        //     "f_email"=>'required',
        //     "f_social_media"=>'required',
        //     "f_sms_number"=>'required',
        //     "f_other"=>'required',
        //     "f_fb_private_msg"=>'required',
        //     "fac_origin_bank"=>'required',
        //     "fac_origin_bank_country"=>'required',
        //     "fac_destiny_bank"=>'required',
        //     "fac_destiny_bank_number"=>'required'
        // ]);

        // $user = new User([
        //     "found_us"=>$request->get('found_us'),
        //     "person_type"=>$request->get('person_type'),
        //     "first_name"=>$request->get('first_name'),
        //     "last_name"=>$request->get('last_name'),
        //     "user_id"=>$request->get('user_id'),
        //     "email"=>$request->get('email'),
        //     "person_country_of_origin"=>$request->get('person_country_of_origin'),
        //     "mobile_phone_number"=>$request->get('mobile_phone_number'),
        //     "landline_number"=>$request->get('landline_number'),
        //     "c_name"=>$request->get('c_name'),
        //     "c_rif"=>$request->get('c_rif'),
        //     "c_country_of_origin"=>$request->get('c_country_of_origin'),
        //     "c_city"=>$request->get('c_city'),
        //     "c_address"=>$request->get('c_address'),
        //     "cr_full_name"=>$request->get('cr_full_name'),
        //     "cr_email"=>$request->get('cr_email'),
        //     "cr_mobile_phone_number"=>$request->get('cr_mobile_phone_number'),
        //     "cr_landline_phone_number"=>$request->get('cr_landline_phone_number'),
        //     "web_language"=>$request->get('web_language'),
        //     "log_in_email"=>$request->get('log_in_email'),
        //     "log_in_password"=>$request->get('log_in_password'),
        //     "frequency_bool"=>$request->get('frequency_bool'),
        //     "frequency_in_time"=>$request->get('frequency_in_time'),
        //     "interest_services"=>$request->get('interest_services'),
        //     "f_email"=>$request->get('f_email'),
        //     "f_social_media"=>$request->get('f_social_media'),
        //     "f_sms_number"=>$request->get('f_sms_number'),
        //     "f_other"=>$request->get('f_other'),
        //     "f_fb_private_msg"=>$request->get('f_fb_private_msg'),
        //     "fac_origin_bank"=>$request->get('fac_origin_bank'),
        //     "fac_origin_bank_country"=>$request->get('fac_origin_bank_country'),
        //     "fac_destiny_bank"=>$request->get('fac_destiny_bank'),
        //     "fac_destiny_bank_number"=>$request->get('fac_destiny_bank_number')
        // ]);

        // Validate steps data
        // switch($step){
        //     case 1:
        //     break;
        //     case 2:
        //     break;
        //     case 3:
        //     break;
        //     case 4:
        //     break;
        //     case 5:
        //     break;
        //     case 6:
        //     break;
        // }

        // if ($step == 6){
        //     $user->save();
        //     return redirect('/index')->success('success','User created');
        // }else{
        //     Session::put('key',$request->get('found_us'));
        //     $type = 'none';
        //     return view('main_sections.sign_up',compact("step","type"));
        // }
}

