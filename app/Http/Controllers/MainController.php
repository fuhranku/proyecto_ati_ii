<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Requesting;

use App;

class MainController extends Controller
{
    public function sign_up()
    {
        //$currentPage = 'create';
        return view('main_sections.sign_up');
    }

    public function sign_in()
    {
        //$currentPage = 'create';
        return view('main_sections.sign_in');
    }

    public function dwelling()
    {
        //$currentPage = 'create';
        return view('main_sections.dwelling');
    }

    public function services()
    {
        //$currentPage = 'create';
        return view('main_sections.services');
    }

    public function employment()
    {
        //$currentPage = 'create';
        return view('main_sections.employment');
    }

    public function help()
    {
        //$currentPage = 'create';
        return view('main_sections.help');
    }

    public function contact_us()
    {
        //$currentPage = 'create';
        return view('main_sections.contact_us');
    }

    public function about_us()
    {
        //$currentPage = 'create';
        return view('main_sections.about_us');
    }

    public function languages()
    {
        //$currentPage = 'create';
        return view('main_sections.languages');
    }
}
