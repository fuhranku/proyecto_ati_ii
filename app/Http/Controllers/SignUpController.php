<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Requesting;
use Cookie;
use App;
use Session;
// Database Models
use App\Models\Sign_up\User;
use App\Models\Sign_up\SocialMedia;
use App\Models\Sign_up\Country;

class SignUpController extends Controller
{
    public function sign_up_get(){
        // Cookie::queue('probando1', 'valorprobando1', 60);
        // Cookie::queue('probando2', 'valorprobando2', 60);
        // Cookie::queue('probando3', 'valorprobando3', 60);
        // $type = 'none';
        $socialMedias = SocialMedia::all()->sortBy('name');
        $countries = Country::all()->sortBy('name');
        return view('main_sections.sign_up',compact('socialMedias','countries'));
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
        // $step = $request->get('step');
        switch($request->get('step')){
            case 0:
                $validations = [];
                $validations['found_us'] = 'required';
                // Checkbox choices
                switch($request->get('found_us')){
                    case 'rrss':
                        $validations['social_media'] = 'required';
                    break;
                    case 'otro':
                        $validations['other_text'] = 'required|regex:/^[a-zA-Z\s]*$/|max:255';
                    break;
                }
                // Validate what needs to be validated
                $validator = Validator::make($request->all(), $validations);
                if ($validator->fails()){                
                    return response()->json(['errors'=>$validator->errors()->all()]);
                }
                return response()->json(['success'=>'post succesfully done']);
            break;
            case 1:
                $validations = [];
                // Validate person-type checkbox
                $validations['person_type'] = 'required';
                switch($request->get('person_type')){
                    case 'nat':
                        $validations['nombre_pn'] = 'required|alpha';
                        $validations['apellido_pn'] = 'required|alpha';
                        $validations['user_id_pn'] = 'required|string';
                        $validations['email_pn'] = 'required|email';
                        $validations['country_pn'] = 'required';
                    break;
                    case 'jur':
                    break;
                }
                // Validate what needs to be validated
                $validator = Validator::make($request->all(), $validations);
                if ($validator->fails()){                
                    return response()->json(['errors'=>$validator->getMessageBag()]);
                }
                return response()->json(['success'=>'post succesfully done']);
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
}

