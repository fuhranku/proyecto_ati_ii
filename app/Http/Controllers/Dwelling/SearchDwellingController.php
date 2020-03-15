<?php

namespace App\Http\Controllers\Dwelling;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Requesting;
use Response;

// Database Models
use App\Models\Location\Continent;
use App\Models\Location\Country;
use App\Models\Location\State;
use App\Models\Location\City;
use App\Models\Location\Zone;
use App\Models\Dwelling\Comfort;
use App\Models\Dwelling\Service;
use App\Models\Dwelling\Currency;
use App\Models\Dwelling\Dwelling;

class SearchDwellingController extends Controller
{
    public function search_get(){
        
        $continents = Continent::all()->sortBy('name');
        $countries = Country::all()->sortBy('name');
        $states = State::all()->sortBy('name');
        $cities = City::all()->sortBy('name');
        $zones = Zone::all()->sortBy('name');
        $comforts = Comfort::all()->sortBy('name');
        $services = Service::all()->sortBy('name');
        $currency = Currency::all()->sortBy('name');

        return view('dwelling_section.search_section.search',compact('continents','countries','states','cities','zones','comforts','services','currency'));
    }

    public function quick_search(Request $request){

        // $query->where([
        //     ['column_1', '=', 'value_1'],
        //     ['column_2', '<>', 'value_2'],
        //     [COLUMN, OPERATOR, VALUE],
        //     ...
        // ])


        $country = $request->get('country');
        $state = $request->get('state');
        $status = $request->get('status');
        $property_type = $request->get('property_type');

        $match = ['dwellings.country_id' => $country, 
                'dwellings.state_id' => $state, 
                'dwellings.status' => $status,
                'dwellings.property_type' => $property_type
                ];

        $dwelling = DB::table('dwellings')
                        ->join('countries','dwellings.country_id','=','countries.id')
                        ->join('states','dwellings.state_id','=','states.id')
                        ->join('zones','dwellings.zone_id','=','zones.id')
                        ->select('dwellings.*',
                                'countries.name as country_name',
                                'states.name as state_name',
                                'zones.name as zone_name')
                        ->where($match)
                        ->get();

        return Response::json(json_encode($dwelling));
    }
}