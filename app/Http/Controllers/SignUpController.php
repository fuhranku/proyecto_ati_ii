<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Requesting;
use Cookie;
use App;
use Session;
use Log;

// Database Models
use App\Models\Location\Country;
use App\Models\Location\City;
use App\Models\Sign_up\User;
use App\Models\Sign_up\SocialMedia;
use App\Models\Sign_up\NaturalPerson;
use App\Models\Sign_up\LegalPerson;

class SignUpController extends Controller
{
    public function sign_up_get(){
        // Cookie::queue('probando1', 'valorprobando1', 60);
        // Cookie::queue('probando2', 'valorprobando2', 60);
        // Cookie::queue('probando3', 'valorprobando3', 60);
        // $type = 'none';
        $socialMedias = SocialMedia::all()->sortBy('name');
        $countries = Country::all()->sortBy('name');
        $users = User::all();
        $users_count = count($users) + 1;
        return view('main_sections.sign_up',compact('socialMedias','countries','users_count'));
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
                $step0 = $this->initialize(0);
                $validations = [];
                $validations['found_us'] = 'required';
                // Checkbox choices
                $found_us = [
                    'option' => null,
                    'social_media' => null,
                    'other_text' => null,
                ];
                $found_us['option'] = $request->get('found_us');
                switch($request->get('found_us')){
                    case 'rrss':
                        $found_us['social_media'] = $request->get('social_media');
                        $validations['social_media'] = 'required';
                    break;
                    case 'otro':
                        $found_us['other_text'] = $request->get('other_text');
                        $validations['other_text'] = 'required|regex:/^[a-zA-Z\s]*$/|max:255';
                    break;
                }
                // Validate what needs to be validated
                $validator = Validator::make($request->all(), $validations);
                if ($validator->fails()){                
                    return response()->json(['errors'=>$validator->errors()->all()]);
                }
                $step0['found_us'] = $found_us;
                Session::put('step0',$step0);
            break;
            case 1:
                $validations = [];
                $step1 = $this->initialize(1);
                // Validate person-type checkbox
                $validations['person_type'] = 'required';
                $step1['person_type'] = $request->get('person_type');
                switch($request->get('person_type')){
                    case 'nat':
                        $validations['nombre_pn'] = 'required|alpha';
                        $validations['apellido_pn'] = 'required|alpha';
                        $validations['user_id_pn'] = 'required|string';
                        $validations['email_pn'] = 'required|email';
                        $validations['country_pn'] = 'required';
                        $validations['phone_checkbox_pn'] = 'required';
                        // Persona natural case
                        $step1['nombre_pn'] = $request->get('nombre_pn');
                        $step1['apellido_pn'] = $request->get('apellido_pn');
                        $step1['user_id_pn'] = $request->get('user_id_pn');
                        $step1['email_pn'] = $request->get('email_pn');
                        $step1['country_pn'] = $request->get('country_pn');
                        $step1['phone_checkbox_pn'] = $request->get('phone_checkbox_pn');
                        $step1['mobile_pn'] = $request->get('mobile_pn');
                        $step1['landline_pn'] = $request->get('landline_pn');
                        $step1['landline_ext_pn'] = $request->get('landline_ext_pn');
                    break;
                    case 'jur':
                        $validations['nombre_empresa_pj'] = 'required|string|max:255';
                        $validations['rif_empresa_pj'] = 'required|string';
                        $validations['country_empresa_pj'] = 'required';
                        $validations['cities_empresa_pj'] = 'required';
                        $validations['address_empresa_pj'] = 'required|string';
                        $validations['nombre_rep_pj'] = 'required|regex:/^[a-zA-Z\s]*$/|max:255';
                        $validations['apellido_rep_pj'] = 'required|regex:/^[a-zA-Z\s]*$/|max:255';
                        $validations['email_rep_pj'] = 'required|email';
                        $validations['phone_checkbox_pj'] = 'required';
                        // Persona juridica case
                        $step1['nombre_empresa_pj'] = $request->get('nombre_empresa_pj');
                        $step1['rif_empresa_pj'] = $request->get('rif_empresa_pj');
                        $step1['country_empresa_pj'] = $request->get('country_empresa_pj');
                        $step1['city_empresa_pj'] = $request->get('cities_empresa_pj');
                        $step1['address_empresa_pj'] = $request->get('address_empresa_pj');
                        $step1['nombre_rep_pj'] = $request->get('nombre_rep_pj');
                        $step1['apellido_rep_pj'] = $request->get('apellido_rep_pj');
                        $step1['email_rep_pj'] = $request->get('email_rep_pj');
                        $step1['mobile_pj'] = $request->get('mobile_pj');
                        $step1['landline_pj'] = $request->get('landline_pj');
                        $step1['landline_ext_pj'] = $request->get('landline_ext_pj');
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
                Session::put('step1',$step1);
            break;
            case 2:
                $step2 = $this->initialize(2);
                // Validate person-type checkbox
                $validations['lang'] = 'required';
                // Validate what needs to be validated
                $validator = Validator::make($request->all(), $validations);
                if ($validator->fails()){                
                    return response()->json(['errors'=>$validator->errors()->all()]);
                }
                // Prepare data to save it into session
                $step2['lang'] = $request->get('lang');
                Session::put('step2',$step2);
            break;
            case 3:
                $step3 = $this->initialize(3);;
                $validations['email_login'] = 'required|email';
                $validations['pw_login'] = 'required';
                // Validate what needs to be validated
                $validator = Validator::make($request->all(), $validations);
                if ($validator->fails()){                
                    return response()->json(['errors'=>$validator->getMessageBag()]);
                }
                // Prepare data to save it into session
                $step3['email_login'] = $request->get('email_login');
                $step3['pw_login'] = Hash::make($request->get('pw_login'));
                Session::put('step3',$step3);
            break;
            case 4:
                $step4 = $this->initialize(4);
                $validations['frequency_checkbox'] = 'required';
                $step4['frequency_checkbox'] = $request->get('frequency_checkbox');
                if ($request->get('frequency_checkbox') == 'other'){
                    $validations['custom_frequency'] = 'required|gt:0';
                    $validations['interest_services'] = 'required';
                    $validations['news_means'] = 'required';
                    $step4['days_frequency'] = $request->get('custom_frequency');
                    $step4['interest_services'] = $request->get('interest_services');
                    $step4['news_means'] = $request->get('news_means');
                    if($request->has('news_means.mail')){
                        $validations['news_means.mail'] = 'required|email';
                    }
                    if($request->has('news_means.rrss')){
                        $validations['news_means.rrss'] = 'required';
                    }
                    if($request->has('news_means.other')){
                        $validations['news_means.other'] = 'required|string';
                    }
                    if($request->has('news_means.facebook_acc')){
                        $validations['news_means.facebook_acc'] = 'required|email';
                    }
                }else{
                    $validations['news_means.mail'] = 'nullable';
                    $validations['news_means.rrss'] = 'nullable';
                    $validations['news_means.other'] = 'nullable';
                    $validations['news_means.facebook_acc'] = 'nullable';
                }
                // Validate what needs to be validated
                $validator = Validator::make($request->all(), $validations);
                if ($validator->fails()){                
                    return response()->json(['errors'=>$validator->getMessageBag()]);
                }
                Session::put('step4',$step4);
            break;
            case 5:
                $step5 = $this->initialize(5);
                $validations['banco_origen'] = 'required|string';
                $validations['banco_destino'] = 'required|string';
                $validations['country_facturacion'] = 'required';
                // Validate what needs to be validated
                $validator = Validator::make($request->all(), $validations);
                if ($validator->fails()){                
                    return response()->json(['errors'=>$validator->getMessageBag()]);
                }
                $step5['user_unique_id'] = $request->get('user_unique_id');
                $step5['banco_origen'] = $request->get('banco_origen');
                $step5['banco_destino'] = $request->get('banco_destino');
                $step5['country_facturacion'] = $request->get('country_facturacion');
                Session::put('step5',$step5);
                $this->saveUserIntoDatabase();
            break;
        }
        return response()->json(['success'=>Session::all()]);
    }

    private function initialize($step){
        switch($step){
            case 0:
                return [
                    'found_us' => null
                ];
            case 1:
                return [
                    'person_type' => null,
                    'nombre_pn' => null,
                    'apellido_pn' => null,
                    'user_id_pn' => null,
                    'email_pn' => null,
                    'country_pn' => null,
                    'phone_checkbox_pn' => null,
                    'mobile_pn' => null,
                    'landline_pn' => null,
                    'landline_ext_pn' => null,
                    'nombre_empresa_pj' => null,
                    'rif_empresa_pj' => null,
                    'country_empresa_pj' => null,
                    'cities_empresa_pj' => null,
                    'address_empresa_pj' => null,
                    'nombre_rep_pj' => null,
                    'apellido_rep_pj' => null,
                    'email_rep_pj' => null,
                    'phone_checkbox_pj' => null,
                    'nombre_empresa_pj' => null,
                    'rif_empresa_pj' => null,
                    'country_empresa_pj' => null,
                    'city_empresa_pj' => null,
                    'address_empresa_pj' => null,
                    'nombre_rep_pj' => null,
                    'apellido_rep_pj' => null,
                    'email_rep_pj' => null,
                    'mobile_pj' => null,
                    'landline_pj' => null,
                    'landline_ext_pj' => null,
                ];
            case 2:
                return [
                    'lang' => null,
                ];
            case 3:
                return [
                    'email_login' => null,
                    'pw_login' => null,
                ];
            case 4:
                return [
                    'frequency_checkbox' => null,
                    'days_frequency' => null,
                    'interest_services' => null,
                    'news_means' => null,
                ];
            case 5:
                return [
                    'user_unique_id' => null,
                    'banco_origen' => null,
                    'banco_destino' => null,
                    'country_facturacion' => null,
                ];
        }
    }

    private function saveUserIntoDatabase(){
        $session_data = Session::all();
        $data = [];
        for($i = 0; $i<6;$i++){
            foreach ($session_data['step'.$i] as $key => $value){
                $data[$key] = $value;
            }
        }
        Log::info('Data to put into DB:');
        Log::info($data);
        $user = new User;
        // Set date
        $user->date_reg = date('Y-m-d');
        // Set User role (Default as regular)
        $user->role = 'regular';
        // Step 0  (Cómo supo de nosotros)
            $user->found_us = $data['found_us'];
        // Step 1  (Registrar usuario [Natural|Jurídico])
            $user->person_type = $data['person_type'];
            // Create model based in person type
            switch($data['person_type']){
                case 'nat':
                    $user_type = new NaturalPerson;
                    $user_type->country_id = $data['country_pn'];
                    $user_type->name = $data['nombre_pn'];
                    $user_type->last_name = $data['apellido_pn'];
                    $user_type->person_id = $data['user_id_pn'];
                    $user_type->email = $data['email_pn'];
                    $user_type->mobile_number = $data['mobile_pn'];
                    $user_type->landline_number = $data['landline_pn'];
                    $user_type->landline_number_ext = $data['landline_ext_pn'];
                break;
                case 'jur':
                    $user_type = new LegalPerson;
                    $user_type->country_id = $data['country_empresa_pj'];
                    $user_type->city_id = $data['city_empresa_pj'];
                    $user_type->name_comp = $data['nombre_empresa_pj'];
                    $user_type->rif = $data['rif_empresa_pj'];
                    $user_type->address_comp = $data['address_empresa_pj'];
                    $user_type->name_rep = $data['nombre_rep_pj'];
                    $user_type->last_name_rep = $data['apellido_rep_pj'];
                    $user_type->email_rep = $data['email_rep_pj'];
                    $user_type->mobile_number = $data['mobile_pj'];
                    $user_type->landline_number = $data['landline_pj'];
                    $user_type->landline_number_ext = $data['landline_ext_pj'];
                break;
            }
        // Step 2 (Idioma)
            $user->lang = $data['lang'];
        // Step 3 (Login info)
            $user->email = $data['email_login'];
            $user->password = $data['pw_login'];
        // Step 4 (Frequency info)
            $user->days_freq = $data['days_frequency'];
            $user->interest_services = $data['interest_services'];
            $user->news_means = $data['news_means'];
        // Step 5 (Facturacion info)
            $user->user_unique_id = $data['user_unique_id'];
            $user->banco_origen = $data['banco_origen'];
            $user->banco_destino = $data['banco_destino'];
            $user->country_facturacion = $data['country_facturacion'];
        // Insertar usuario antes de las tablas con sus relaciones
            $user->save();
        // Insertar modelo user_type (el Foreign key se asigna automáticamente con la llamada a save())
            if($data['person_type'] == 'nat'){
                $user->naturalPerson()->save($user_type);
            }else{
                $user->legalPerson()->save($user_type);
            }
    }
}

