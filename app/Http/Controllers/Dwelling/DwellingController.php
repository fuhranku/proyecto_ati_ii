<?php

namespace App\Http\Controllers\Dwelling;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Http\Request;
use Requesting;
use App\Http\Controllers\Controller;


class DwellingController extends Controller
{
    //
    public $info;
    public $info_specific;
    public function publish()
    {
        //$currentPage = 'create';
        return view('dwelling_section.publish');
    }
    
    public function publication()
    {
        //$currentPage = 'create';
        return view('dwelling_section.publication');
    }



    public function modify()
    {
        //$currentPage = 'create';
        return view('dwelling_section.modify');
    }

    public function delete()
    {
        //$currentPage = 'create';
        return view('dwelling_section.delete');
    }

    public function enable()
    {
        //$currentPage = 'create';
        return view('dwelling_section.enable');
    }

    public function disable()
    {
        //$currentPage = 'create';
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
            DB::table('dwellings')
                ->where('id', $dwelling_id)
                ->delete();
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
}
