<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Requesting;


class DwellingController extends Controller
{
    //
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


}
