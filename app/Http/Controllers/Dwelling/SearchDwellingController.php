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
        $comforts = Comfort::all()->sortBy('name');
        $services = Service::all()->sortBy('name');
        $currency = Currency::all()->sortBy('name');

        return view('dwelling_section.search_section.search',compact('continents','countries','states','cities','comforts','services','currency'));
    }

    public function quick_search(Request $request){

        $country = $request->get('country');
        $state = $request->get('state');
        $status = $request->get('status');
        $property_type = $request->get('property_type');

        $dwelling;
        
        if($property_type == 2){

            $match = ['dwellings.country_id' => $country, 
            'dwellings.state_id' => $state, 
            'dwellings.status' => $status,
            'dwellings.property_type' => 0,
            'dwellings.property_type' => 1
            ];

            $dwelling = DB::table('dwellings')
                            ->join('countries','dwellings.country_id','=','countries.id')
                            ->join('states','dwellings.state_id','=','states.id')
                            ->select('dwellings.*',
                                    'countries.name as country_name',
                                    'states.name as state_name')
                            ->where($match)
                            ->get();

        }
        else{

            $match = ['dwellings.country_id' => $country, 
            'dwellings.state_id' => $state, 
            'dwellings.status' => $status,
            'dwellings.property_type' => $property_type
            ];

            $dwelling = DB::table('dwellings')
                            ->join('countries','dwellings.country_id','=','countries.id')
                            ->join('states','dwellings.state_id','=','states.id')
                            ->select('dwellings.*',
                                    'countries.name as country_name',
                                    'states.name as state_name')
                            ->where($match)
                            ->get();

        }
        
        return Response::json(json_encode($dwelling));
    }

    public function detailed_search(Request $request){

        $continent = $request->get('continent');
        $country = $request->get('country');
        $state = $request->get('state');
        $status = $request->get('status');
        $property_type = $request->get('property_type');
        $room = $request->get("room");
        $bathroom = $request->get("bathroom");
        $park = $request->get("park");
        $comfort = $request->get("comfort");
        $service = $request->get("service");
        $active_price = $request->get("active_price");
        $minimum_price = $request->get("minimum_price");
        $maximum_price = $request->get("maximum_price");

        $dwelling;

        if($active_price == 1){ //case searching with price max min

            $dwelling = DB::table('dwellings')
                            ->join('continents','dwellings.continent_id','=','continents.id')
                            ->join('countries','dwellings.country_id','=','countries.id')
                            ->join('states','dwellings.state_id','=','states.id')
                            ->select('dwellings.*',
                                    'countries.name as country_name',
                                    'states.name as state_name')
                            ->where('dwellings.continent_id', '=',$continent)
                            ->where('dwellings.country_id', '=', $country) 
                            ->where('dwellings.state_id','=', $state)
                            ->where('dwellings.status','=',$status)
                            ->where('dwellings.property_type','=',$property_type)
                            ->where('dwellings.rooms','=', $room)
                            ->where('dwellings.bathrooms','=', $bathroom)
                            ->where('dwellings.parking','=',$park)
                            ->where('dwellings.price','<=',$maximum_price)
                            ->where('dwellings.price','>=',$minimum_price)
                            ->whereJsonContains('dwellings.comforts->array', $comfort)
                            ->whereJsonContains('dwellings.services->array', $service)
                            ->get();

        }
        else if($active_price == 2){ //case searching any price
            $dwelling = DB::table('dwellings')
                            ->join('continents','dwellings.continent_id','=','continents.id')
                            ->join('countries','dwellings.country_id','=','countries.id')
                            ->join('states','dwellings.state_id','=','states.id')
                            ->select('dwellings.*',
                                    'countries.name as country_name',
                                    'states.name as state_name')
                            ->where('dwellings.continent_id', '=',$continent)
                            ->where('dwellings.country_id', '=', $country) 
                            ->where('dwellings.state_id','=', $state)
                            ->where('dwellings.status','=',$status)
                            ->where('dwellings.property_type','=',$property_type)
                            ->where('dwellings.rooms','=', $room)
                            ->where('dwellings.bathrooms','=', $bathroom)
                            ->where('dwellings.parking','=',$park)
                            ->whereJsonContains('dwellings.comforts->array', $comfort)
                            ->whereJsonContains('dwellings.services->array', $service)
                            ->get();

        }


        return Response::json(json_encode($dwelling));
    }
}