<?php

namespace App\Http\Controllers\Dwelling;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Http\Request;
use Requesting;
use App\Http\Controllers\Controller;
use Session;

// Database Models
use App\Models\Location\Continent;
use App\Models\Location\Country;
use App\Models\Location\State;
use App\Models\Location\City;
use App\Models\Dwelling\Comfort;
use App\Models\Dwelling\Service;
use App\Models\Dwelling\Currency;
use App\Models\Dwelling\Dwelling;
use App\Models\Sign_up\User;
use App\Models\Sign_up\NaturalPerson;
use App\Models\Sign_up\LegalPerson;
use Log;



class DwellingController extends Controller
{
    //
    public $info;
    public $info_specific;
    public function publish()
    {
        //$currentPage = 'create';
        if (!Session::has('info')) {
            return view('main_sections.index');
        }
        
        return view('dwelling_section.publish');
    }
    
    public function publication()
    {
        //$currentPage = 'create';
        if (!Session::has('info')) {
            return view('main_sections.index');
        }
        
        return view('dwelling_section.publication');
    }



    public function modify()
    {
        //$currentPage = 'create';
        if (!Session::has('info')) {
            return view('main_sections.index');
        }
        
        return view('dwelling_section.modify');
    }

    public function delete()
    {
        //$currentPage = 'create';
        if (!Session::has('info')) {
            return view('main_sections.index');
        }
        
        return view('dwelling_section.delete');
    }

    public function enable()
    {
        //$currentPage = 'create';
        if (!Session::has('info')) {
            return view('main_sections.index');
        }
        
        return view('dwelling_section.enable');
    }

    public function disable()
    {
        //$currentPage = 'create';
        if (!Session::has('info')) {
            return view('main_sections.index');
        }
        
        return view('dwelling_section.disable');
    }

    public function enable_dwelling(Request $request)
    {
        $selected_dwelling = $request->get('selected_dwellings');
        
        foreach ($selected_dwelling as &$dwelling_id) {
            DB::table('dwellings')
                ->where('id', $dwelling_id)
                ->update(['enable' => 1]);
        }

        return Response::json("Viviendas activadas");
    }

    public function disable_dwelling(Request $request)
    {
        $selected_dwelling = $request->get('selected_dwellings');
        
        foreach ($selected_dwelling as &$dwelling_id) {
            DB::table('dwellings')
                ->where('id', $dwelling_id)
                ->update(['enable' => 0]);
        }

        return Response::json("Viviendas desactivadas");
    }

    public function delete_dwelling(Request $request){
        
        $selected_dwelling = $request->get('selected_dwellings');
        
        foreach ($selected_dwelling as &$dwelling_id) {
            Dwelling::find($dwelling_id)->images()->delete();
            Dwelling::find($dwelling_id)->videos()->delete();
            Dwelling::find($dwelling_id)->delete();
        }

        return Response::json("Viviendas borradas");
    }

    public function dwelling_get()
    {
        if (Session::has('info') && Session::get('info_specific')) {
            # code...
            $info = Session::get('info');
            $info_specific = Session::get('info_specific');
        }else {
            # code...
            $info = '';
            $info_specific = '';
        }
    }

    public function retrieve_user_data(Request $request){
        $user = User::find($request['user_id']);

        return response()->json(['user_data'=>$user]);
    }

    public function contact_announcer(Request $request){
        $section = $request->get('section');
        $dwelling = Dwelling::find($request->get('dwelling_id'));
        
        $user_info = User::find($dwelling->user_id);
        $announcer_email = $dwelling->contact_email;
        $announcer_email = 'yuliferna123@gmail.com';
        Log::info($dwelling->contact_email);
        if($user_info->person_type == 'nat'){
            // Para consultar cosas en natural person: $user_info->naturalPerson->person_id
        }else{
            // Para consultar cosas en natural person: $user_info->legalPerson->person_id
        }
        //Phone
        $phone = '';
        if ($request->get('mobile') != null) {
            $phone = $phone . ' ';
            $phone = $phone . $request->get('mobile');
        }
        if ($request->get('landline') != null) {
            $phone = $phone . ' ';
            $phone = $phone .$request->get('landline');
        }
        //vivienda link
        $vivienda = 'http://' . strval(request()->getHttpHost()) . '/dwelling/show_details/' . strval($request->get('dwelling_id'));

        $validations = [];
        switch($section){
            // Enviar correo
            case 0: 
                $validations['applicant_name'] = 'required|regex:/^[a-zA-Z\s]*$/';
                $validations['applicant_lastname'] = 'required|regex:/^[a-zA-Z\s]*$/';
                $validations['applicant_email'] = 'required|email';
                $validations['phone_checkbox'] = 'required';
                $validations['applicant_message'] = 'required';
                $validator = Validator::make($request->all(), $validations);
                if ($validator->fails()){                
                    return response()->json(['errors'=>$validator->getMessageBag()]);
                }else{
                    // Send email
                        //  ----- Send email code here
                    $details = [
                        'title' => 'Correo del usuario ' . $request->get('applicant_email'),
                        'name' => $request->get('applicant_name') . ' ' . $request->get('applicant_lastname'),
                        'email' => $request->get('applicant_email'),
                        'phone' => $phone,
                        'introduction' => 'Está interesado en la vivienda manda el siguiente mensaje: ',
                        'subject' => $request->get('applicant_name') . ' ' . $request->get('applicant_lastname'). ' te envió un correo',
                        'url' => $vivienda,
                        'message' => $request->get('applicant_message'),
                    ];
                
                    \Mail::to($announcer_email)->send(new \App\Mail\contactAnnouncer($details));
            
                    return response()->json(['success' => 'e-mail has been successfully sent!']);
                }
                break;
            // quiere que lo llamen
            case 2:
                $validations['applicant_name'] = 'required|regex:/^[a-zA-Z\s]*$/';
                $validations['applicant_lastname'] = 'required|regex:/^[a-zA-Z\s]*$/';
                $validations['phone_checkbox'] = 'required';
                $validations['contact_days_checkbox'] = 'required';
                $validations['contact_hour_array'] = 'required';
                $validator = Validator::make($request->all(), $validations);
                if ($validator->fails()){                
                    return response()->json(['errors'=>$validator->getMessageBag()]);
                }else{
                    // Send email
                        //  ----- Send email code here
                    
                    $details = [
                        'title' => 'Quiere que lo llamen',
                        'name' => $request->get('applicant_name') . ' ' . $request->get('applicant_lastname'),
                        'email' => $request->get('applicant_email'),
                        'phone' => $phone,
                        'introduction' => 'Quiere que lo llame a su teléfono: ',
                        'subject' => $request->get('applicant_name') . ' ' . $request->get('applicant_lastname'). ' quiere que lo llames',
                        'url' => $vivienda,
                        'message' => $phone,
                    ];
                
                    \Mail::to($announcer_email)->send(new \App\Mail\contactAnnouncer($details));
            
                    return response()->json(['success' => 'e-mail has been successfully sent!']);
                }
                break;
            //Enviar consulta
            case 3:
                $validations['applicant_email'] = 'required|email';
                $validations['applicant_name'] = 'required|regex:/^[a-zA-Z\s]*$/';
                $validations['applicant_lastname'] = 'required|regex:/^[a-zA-Z\s]*$/';
                $validations['phone_checkbox'] = 'required';
                $validations['applicant_message'] = 'required';
                $validator = Validator::make($request->all(), $validations);
                if ($validator->fails()){                
                    return response()->json(['errors'=>$validator->getMessageBag()]);
                }else{
                    // Send email
                        //  ----- Send email code here
                    $details = [
                        'title' => 'Consulta sobre vivienda',
                        'name' => $request->get('applicant_name') . ' ' . $request->get('applicant_lastname'),
                        'email' => $request->get('applicant_email'),
                        'phone' => $phone,
                        'introduction' => 'Manda el siguiente mensaje: ',
                        'subject' => $request->get('applicant_name') . ' ' . $request->get('applicant_lastname'). ' te envió una consulta',
                        'url' => $vivienda,
                        'message' => $request->get('applicant_message'),
                    ];
                
                     \Mail::to($announcer_email)->send(new \App\Mail\contactAnnouncer($details));
            
                    return response()->json(['success' => 'e-mail has been successfully sent!']);
                }
                break;
            //Agendar visita
            case 4:
                $validations['schedule_visit_date'] = 'required';
                $validations['applicant_email'] = 'required|email';
                $validations['phone_checkbox'] = 'required';
                $validations['applicant_message'] = 'required';
                $validator = Validator::make($request->all(), $validations);
                if ($request->get('visit_radio_btn') == "fixed"){
                    $validations['contact_hour_array'] = 'required';
                }
                if ($validator->fails()){                
                    return response()->json(['errors'=>$validator->getMessageBag()]);
                }else{
                    // Send email
                        //  ----- Send email code here
                    $details = [
                        'title' => 'Agendar visita',
                        'name' => $request->get('applicant_name') . ' ' . $request->get('applicant_lastname'),
                        'email' => $request->get('applicant_email'),
                        'phone' => $phone,
                        'introduction' => ' Desea agendar una visita',
                        'subject' => $request->get('applicant_name') . ' ' . $request->get('applicant_lastname'). ' quiere agendar una visita',
                        'url' => $vivienda,
                        'message' => $request->get('applicant_message'),
                    ];
                
                    \Mail::to($announcer_email)->send(new \App\Mail\contactAnnouncer($details));
            
                    return response()->json(['success' => 'e-mail has been successfully sent!']);
                }
                break;
        }

    }

    public function show_details(Request $request,$id){

        $dwelling = new \stdClass();

        $dwelling->dwellings = DB::table('dwellings')
            ->where('dwellings.id', $id)
            ->join('continents','dwellings.continent_id','=','continents.id')
            ->join('countries','dwellings.country_id','=','countries.id')
            ->join('states','dwellings.state_id','=','states.id')
            ->join('cities','dwellings.city_id','=','cities.id')
            ->select('dwellings.*',
                    'continents.name as continent_name',
                    'countries.name as country_name',
                    'states.name as state_name',
                    'cities.name as city_name')
            ->get();

        $dwelling->services = DB::table('services')
            ->get();

        $dwelling->comforts = DB::table('comforts')
            ->get();

        
        // Add images
        $json_dwelling = json_decode(json_encode($dwelling->dwellings), true);
        //$json_dwelling = json_decode($json_dwelling);
        foreach ($json_dwelling as $key => $value){
            $currency_id = $json_dwelling[$key]['currency_id'];
            $currency_id == 3 ? $json_dwelling[$key]['currency_name'] = $json_dwelling[$key]['currency_name'] :
                                $json_dwelling[$key]['currency_name'] = Currency::find($currency_id)->name;
            $json_dwelling[$key]['images'] = Dwelling::find($json_dwelling[$key]['id'])->images;
        }
        // Add videos
        foreach ($json_dwelling as $key => $value){
            $json_dwelling[$key]['videos'] = Dwelling::find($json_dwelling[$key]['id'])->videos;
        }
        $dwelling->dwellings = $json_dwelling;
        
        return view('dwelling_section.show_details',compact("dwelling"));
    }
}
