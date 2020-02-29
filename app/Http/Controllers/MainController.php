<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Requesting;
use Cookie;
use App;

class MainController extends Controller
{

    public function sign_in(){
        //$currentPage = 'create';
        // $this->validate(request(), {
        //     'Email' => 'email|required|string',
        //     'Password' => 'required|string'
        // })
        return view('main_sections.sign_in');
    }

    public function dwelling(){
        //$currentPage = 'create';
        return view('main_sections.dwelling');
    }


    public function employment(){
        //$currentPage = 'create';
        return view('main_sections.employment');
    }

    public function help(){
        //$currentPage = 'create';
        return view('main_sections.help');
    }

    public function contact_us(){
        //$currentPage = 'create';
        return view('main_sections.contact_us');
    }

    public function about_us(){
        //$currentPage = 'create';
        return view('main_sections.about_us');
    }

    public function languages(){
        //$currentPage = 'create';
        return view('main_sections.languages');
    }
}
