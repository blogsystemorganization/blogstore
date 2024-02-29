<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Image;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();
        $user_id = $user['id'];

        Image::create([
            'user_id' => $user_id,
            'imageable_id' => $request['imageable_id'],
            'imageable_type' => $request['imageable_type'],
            'image' => $request['image']
        ]);

        return redirect()->back();
    }


    public function update(Request $request)
    {

        $user = Auth::user();
        $user_id = $user['id'];

        Image::update([
            'user_id' => $user_id,
            'imageable_id' => $request['imageable_id'],
            'imageable_type' => $request['imageable_type'],
            'image' => $request['image']
        ]);

        return view('profile.index');

    }
}
