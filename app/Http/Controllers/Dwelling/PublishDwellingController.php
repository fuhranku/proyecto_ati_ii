<?php

namespace App\Http\Controllers\Dwelling;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Requesting;
use Log;
use App\Http\Controllers\Controller;
use Image;

// Database Models
use App\Models\Location\Continent;
use App\Models\Location\Country;
use App\Models\Location\State;
use App\Models\Location\City;
use App\Models\Dwelling\Comfort;
use App\Models\Dwelling\Service;
use App\Models\Dwelling\Currency;


class PublishDwellingController extends Controller
{
    public function publish_get()
    {
        $continents = Continent::all()->sortBy('name');
        $countries = Country::all()->sortBy('name');
        $states = State::all()->sortBy('name');
        $cities = City::all()->sortBy('name');
        $comforts = Comfort::all()->sortBy('name');
        $services = Service::all()->sortBy('name');
        $currency = Currency::all()->sortBy('name');

        return view('dwelling_section.publish_section.publish',compact('continents','countries','states','cities','comforts','services','currency'));
    }

    public function post_image(Request $request){
        $image = $request->file('dropImage');
        $full_path = $image->getClientOriginalName();
        Storage::disk('publicImage')->put($full_path, File::get($image));
        return response()->json(['url' => Storage::disk('publicImage')->url($full_path)]);
    }

    public function remove_image(Request $request){
        $image_src = $request->get('src');
        $image_src = basename($image_src);
        Storage::disk('publicImage')->delete($image_src);
        return response()->json(['success' => 'success!']);
    }

    public function post_video(Request $request){
        $video = $request->file('dropVideo');
        $full_path = $video->getClientOriginalName();
        Log::info($full_path);
        Storage::disk('publicVideo')->put($full_path, File::get($video));
        return response()->json(['url' => Storage::disk('publicVideo')->url($full_path)]);
    }

    public function remove_video(Request $request){
        $video_src = $request->get('src');
        $video_src = basename($video_src);
        Storage::disk('publicVideo')->delete($video_src);
        return response()->json(['success' => 'success!']);
    }

    public function store_dwelling(Request $request){
        $validations = [
            'continent_select' =>  'required',
            'country_select' =>    'required',
            'state_select' =>      'required',
            'city_select' =>       'required',
            'checkbox_dropdown_comfort' => 'required',            
            'services_publish_dwelling_dropdown' => 'required',                          
        ];
        if($request->get('other_services_choice') != 1){
            $validations['other_services_choice'] = 'required|regex:/^[a-zA-Z\s]*$/';
        }
        $validator = Validator::make($request->all(), $validations);
        if ($validator->fails()){                
            return response()->json(['errors'=>$validator->getMessageBag()]);
        }
    }
}