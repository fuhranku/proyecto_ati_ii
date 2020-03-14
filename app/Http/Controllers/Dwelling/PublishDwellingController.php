<?php

namespace App\Http\Controllers\Dwelling;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Requesting;
use Log;
use App\Http\Controllers\Controller;

class PublishDwellingController extends Controller
{
    public function publish()
    {
        return view('dwelling_section.publish_section.publish');
    }

    public function post_image(Request $request){
        $image = $request->file('dropImage');
        $full_path = $image->getClientOriginalName();
        Storage::disk('publicImage')->put($full_path, File::get($image));
        return response()->json(['url' => Storage::disk('publicImage')->url($full_path)]);
    }
}