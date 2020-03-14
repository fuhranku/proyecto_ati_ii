<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Requesting;


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

    public function search()
    {
        
        //$currentPage = 'create';
        return view('dwelling_section.search');
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
