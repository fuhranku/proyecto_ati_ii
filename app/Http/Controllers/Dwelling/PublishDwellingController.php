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
use App\Models\Location\Zone;
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
        $zones = Zone::all()->sortBy('name');
        $comforts = Comfort::all()->sortBy('name');
        $services = Service::all()->sortBy('name');
        $currency = Currency::all()->sortBy('name');

        return view('dwelling_section.publish_section.publish',compact('continents','countries','states','cities','zones','comforts','services','currency'));
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
        Log::info($request->get('src'));
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
        return response()->json(['success' => 'success!']);
    }
}