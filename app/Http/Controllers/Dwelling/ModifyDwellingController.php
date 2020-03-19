<?php

namespace App\Http\Controllers\Dwelling;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Requesting;
use Log;
use App\Http\Controllers\Controller;
use Session;

// Database Models
use App\Models\Location\Continent;
use App\Models\Location\Country;
use App\Models\Location\State;
use App\Models\Location\City;
use App\Models\Dwelling\Comfort;
use App\Models\Dwelling\Service;
use App\Models\Dwelling\Currency;
use App\Models\Dwelling\Dwelling;
use App\Models\Dwelling\Image;
use App\Models\Dwelling\Video;


class ModifyDwellingController extends Controller
{
    public function modify_get(){
        Session::forget('images');
        Session::forget('videos');

        $continents = Continent::all()->sortBy('name');
        $countries = Country::all()->sortBy('name');
        $states = State::all()->sortBy('name');
        $cities = City::all()->sortBy('name');
        $comforts = Comfort::all()->sortBy('name');
        $services = Service::all()->sortBy('name');
        $currency = Currency::all()->sortBy('name');
        $dwelling = Dwelling::find(20);
        $images = Dwelling::find(20)->images;
        $videos = Dwelling::find(20)->videos;
        $dwelling['images'] = $images;
        $dwelling['videos'] = $videos;


        return view('dwelling_section.modify_section.modify',compact('continents','countries','states','cities','comforts','services','currency','dwelling'));
    }
}