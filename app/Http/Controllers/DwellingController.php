<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Requesting;


class DwellingController extends Controller
{
    //
    public function search()
    {
        //$currentPage = 'create';
        return view('dwelling_section.search');
    }
    
    public function delete()
    {
        //$currentPage = 'create';
        return view('dwelling_section.delete');
    }

    public function consult()
    {
        
        //$currentPage = 'create';
        return view('dwelling_section.consult');
    }

    public function modify()
    {
        //$currentPage = 'create';
        return view('dwelling_section.modify');
    }

    public function publish()
    {
        //$currentPage = 'create';
        return view('dwelling_section.publish');
    }
}
