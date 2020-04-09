<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Requesting;
use Cookie;
use App;
use Log;

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

    public function sendMailContact(Request $request){
        Log::info('hooooooolaaaaa');
        Log::info($request['email_contact']);
        Log::info($request['name_contact']);
        Log::info($request['message_contact']);
        $validations['email_contact'] = 'email|required|string';
        $validations['name_contact'] = 'required|alpha';
        $validations['message_contact'] = 'required|string';
        
        $validator = Validator::make($request->all(), $validations);
        
        if ($validator->fails()){          
            return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
            
        }
        $details = [
            'title' => 'Pregunta del usuario ' . $request['name_contact'],
            'email' => $request['email_contact'],
            'message' => $request['message_contact'],
        ];
    
        \Mail::to('proyectoati2@gmail.com')->send(new \App\Mail\contactUsEmail($details));

        $array =(object)['success' => array('Complete')];
        return response()->json([ 'success' =>  $array ]);
    }
}
