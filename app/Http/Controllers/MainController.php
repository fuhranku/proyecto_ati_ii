<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Requesting;
use Cookie;

use App;

class MainController extends Controller
{
    public function sign_up_get($step = 1)
    {
        Cookie::queue('probando1', 'valorprobando1', 60);
        Cookie::queue('probando2', 'valorprobando2', 60);
        Cookie::queue('probando3', 'valorprobando3', 60);
        $type = 'none';
        return view('main_sections.sign_up',compact("step", "type"));
    }

    public function sign_up_get_natural($type = 1){
        $step = 2;
        return view('main_sections.sign_up',compact("step","type"));
    }

    public function sign_up_post($step = 1){
       //$step = $request->input("step");
        return view('main_sections.sign_in');
    }

    public function sign_in(){
        //$currentPage = 'create';
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
