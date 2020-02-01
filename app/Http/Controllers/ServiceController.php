<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Requesting;

class ServiceController extends Controller
{
    //
    public function search()
    {
        //$currentPage = 'create';
        return view('service_section.search');
    }
    
    public function delete()
    {
        //$currentPage = 'create';
        return view('service_section.delete');
    }

    public function consult()
    {
        //$currentPage = 'create';
        return view('service_section.consult');
    }

    public function modify()
    {
        //$currentPage = 'create';
        return view('service_section.modify');
    }

    public function create()
    {
        //$currentPage = 'create';
        return view('service_section.create');
    }
}
