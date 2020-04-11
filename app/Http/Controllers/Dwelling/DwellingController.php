<?php

namespace App\Http\Controllers\Dwelling;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Http\Request;
use Requesting;
use App\Http\Controllers\Controller;
use Session;

use App\Models\Dwelling\Dwelling;
use App\Models\Sign_up\User;


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
        $validations = [];
        switch($section){
            case 0: case 3:
                $validations['applicant_name'] = 'required|regex:/^[a-zA-Z\s]*$/';
                $validations['applicant_lastname'] = 'required|regex:/^[a-zA-Z\s]*$/';
                $validations['applicant_email'] = 'required|email';
                $validations['phone_checkbox'] = 'required';
                $validations['applicant_message'] = 'required';
                break;
            case 2:
                $validations['applicant_name'] = 'required|regex:/^[a-zA-Z\s]*$/';
                $validations['applicant_lastname'] = 'required|regex:/^[a-zA-Z\s]*$/';
                $validations['phone_checkbox'] = 'required';
                $validations['contact_days_checkbox'] = 'required';
                $validations['contact_hour_array'] = 'required';
                break;
            case 4:
                $validations['schedule_visit_date'] = 'required';
                $validations['applicant_email'] = 'required|email';
                $validations['phone_checkbox'] = 'required';
                $validations['applicant_message'] = 'required';
                if ($request->get('visit_radio_btn') == "fixed"){
                    $validations['contact_hour_array'] = 'required';
                }
                break;
        }
        $validator = Validator::make($request->all(), $validations);
        if ($validator->fails()){                
            return response()->json(['errors'=>$validator->getMessageBag()]);
        }else{
            // Send email
                //  ----- Send email code here
            return response()->json(['success' => 'e-mail has been successfully sent!']);
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
        
        return view('dwelling_section.show_details',compact("dwelling"));
    }
}
