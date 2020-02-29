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
use App\Models\Sign_up\City;

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

    public function getCities(Request $request){
        $cities = Country::find($request->get('country'))->cities()->pluck('id','name');
        return response()->json([
            'success'=>'post succesfully done',
            'cities'=>$cities
        ]);
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
                        $validations['phone_checkbox_pn'] = 'required';
                    break;
                    case 'jur':
                        $validations['nombre_empresa_pj'] = 'required|regex:/^[a-zA-Z\s]*$/|max:255';
                        $validations['rif_empresa_pj'] = 'required|string';
                        $validations['country_empresa_pj'] = 'required';
                        $validations['cities_empresa_pj'] = 'required';
                        $validations['address_empresa_pj'] = 'required|string';
                        $validations['nombre_rep_pj'] = 'required|regex:/^[a-zA-Z\s]*$/|max:255';
                        $validations['apellido_rep_pj'] = 'required|regex:/^[a-zA-Z\s]*$/|max:255';
                        $validations['email_rep_pj'] = 'required|email';
                        $validations['phone_checkbox_pj'] = 'required';
                    break;
                    default:
                    $validator = Validator::make($request->all(), $validations);
                    if ($validator->fails()){                
                        return response()->json(['errors'=>$validator->getMessageBag()]);
                    }
                }
                // Validate what needs to be validated
                $validator = Validator::make($request->all(), $validations);
                if ($validator->fails()){                
                    return response()->json(['errors'=>$validator->getMessageBag()]);
                }
            break;
            case 2:
                // Validate person-type checkbox
                $validations['lang'] = 'required';
                // Validate what needs to be validated
                $validator = Validator::make($request->all(), $validations);
                if ($validator->fails()){                
                    return response()->json(['errors'=>$validator->errors()->all()]);
                }
            break;
            case 3:
                $validations['email_login'] = 'required|email';
                $validations['pw_login'] = 'required';
                // Validate what needs to be validated
                $validator = Validator::make($request->all(), $validations);
                if ($validator->fails()){                
                    return response()->json(['errors'=>$validator->getMessageBag()]);
                }
            break;
            case 4:
                $validations['frequency_checkbox'] = 'required';
                if ($request->get('frequency_checkbox') == 'other'){
                    
                }
                // Validate what needs to be validated
                $validator = Validator::make($request->all(), $validations);
                if ($validator->fails()){                
                    return response()->json(['errors'=>$validator->getMessageBag()]);
                }
            break;
            case 5:
            break;
        }
        return response()->json(['success'=>'post succesfully done']);
    }
}

