<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Image;

class UserController extends Controller
{
    public function index(User $user)
    {
        return view('home', [
            'title' => $user->name . "blogs",
            'blogs' => $user->blogs()->with('user', 'category')->paginate() // fix n+1 problem afteer looping
        ]);
    }

}
