<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginIndex(){
        return view("/register/login");
    }

    public function login(Request $request){
       
        $user = User::where('email', $request['email'])->first();

        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8' , 'max:30']
        ]);

        if (!$user || !Hash::check($request['password'], $user->password)) {
            // Authentication failed
            return redirect()->back()->with('message', 'Invalid e-mail & password');
        }

        Auth::login($user);
        return redirect("homepages/index");
     

    }
}
