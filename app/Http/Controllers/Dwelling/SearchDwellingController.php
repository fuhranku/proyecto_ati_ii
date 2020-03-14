<?php

namespace App\Http\Controllers\Dwelling;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Requesting;

class SearchDwellingController extends Controller
{
    public function search(){
        //$currentPage = 'create';
        return view('dwelling_section.search_section.search');
    }
}