<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Requesting;
use Response;
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
use Log;

class IndexController extends Controller
{

    public function keyword_search(Request $request){

        $search_type = 1;
    
        Session::forget("session_query");

        $continents = Continent::all()->sortBy('name');
        $countries = Country::all()->sortBy('name');
        $states = State::all()->sortBy('name');
        $cities = City::all()->sortBy('name');
        $comforts = Comfort::all()->sortBy('name');
        $services = Service::all()->sortBy('name');
        $currency = Currency::all()->sortBy('name');

        $session_query = new \stdClass();
        $session_query->keyword = $request->input("keyword_dwelling"); 
        $session_query->search_type = 2;

        Session::put('session_query',json_encode($session_query));

        return view('dwelling_section.search_section.search',
            compact(
                'continents',
                'countries',
                'states',
                'cities',
                'comforts',
                'services',
                'currency',
                'search_type'));
    }

    public function quick_search(Request $request){

        $search_type = 1;

        Session::forget("session_query");

        $continents = Continent::all()->sortBy('name');
        $countries = Country::all()->sortBy('name');
        $states = State::all()->sortBy('name');
        $cities = City::all()->sortBy('name');
        $comforts = Comfort::all()->sortBy('name');
        $services = Service::all()->sortBy('name');
        $currency = Currency::all()->sortBy('name');

        $session_query = new \stdClass();
        $session_query->country = $request->quick_countries; 
        $session_query->state = $request->quick_states;
        $session_query->status = $request->input("status_fs");
        $session_query->property_type =$request->quick_property_type;

        //set type of query as quick query
        $session_query->search_type = 1;

        Session::put('session_query',json_encode($session_query));

        return view('dwelling_section.search_section.search',
            compact(
                'continents',
                'countries',
                'states',
                'cities',
                'comforts',
                'services',
                'currency',
                'search_type'));
    }

    public function detailed_search(Request $request){

        

        $continents = Continent::all()->sortBy('name');
        $countries = Country::all()->sortBy('name');
        $states = State::all()->sortBy('name');
        $cities = City::all()->sortBy('name');
        $comforts = Comfort::all()->sortBy('name');
        $services = Service::all()->sortBy('name');
        $currency = Currency::all()->sortBy('name');

        $session_query = new \stdClass();
        $session_query->continent = $request->detailed_continents;
        $session_query->country = $request->detailed_countries; 
        $session_query->state = $request->detailed_states;
        $session_query->city = $request->detailed_cities;
        $session_query->status = $request->input("status_ds");
        $session_query->property_type = $request->input("detailed_property_type");
        $session_query->rooms = $request->input("quant")["1"];
        $session_query->bathrooms = $request->input("quant")["2"];
        $session_query->parking = $request->input("quant")["3"];
        $session_query->comfort = $request->detailed_comforts_dwelling;
        $session_query->service = $request->detailed_services_dwelling;
        $session_query->price_type = $request->input("detailed_price_type");
        $session_query->min_price = $request->input("detailed_minimum_price");
        $session_query->max_price = $request->input("detailed_maximum_price");

        $search_type = 1;
        //set type of query as detailed query
        $session_query->search_type = 0;

        Session::put('session_query',json_encode($session_query));

        return view('dwelling_section.search_section.search',
            compact(
                'continents',
                'countries',
                'states',
                'cities',
                'comforts',
                'services',
                'currency',
                'search_type'));
    }



    public function index_get(){
        $continents = Continent::all()->sortBy('name');
        $countries = Country::all()->sortBy('name');
        $states = State::all()->sortBy('name');
        $cities = City::all()->sortBy('name');
        $comforts = Comfort::all()->sortBy('name');
        $services = Service::all()->sortBy('name');
        $currency = Currency::all()->sortBy('name');

        return view('index_section.index',compact('continents','countries','states','cities','comforts','services','currency'));
    }
}
