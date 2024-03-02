<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Image;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);



        $userdata = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        $user = User::create($userdata);

        event(new Registered($user));

        Auth::login($user);


        $defaultcover = 'cover5.jpg';
        $defaultprofile = 'profile.jpg';


        $user_id = Auth::user()->id;

        try {
            // Create and store cover photo
            if (file_exists($request['cover'])) {

                $cover = $request['cover'];
                $coverpath = $cover->store('public/profile');
            } else {
                $defaultcoverfile = storage_path('app/public/' . $defaultcover);
                $coverpath = Storage::putFile('public/profile', $defaultcoverfile);

            }



            $coverimage = new Image();
            $coverimage->image = $coverpath;
            $coverimage->imageable_id = $user_id;
            $coverimage->imageable_type = 'App\Model\User\Cover';
            $coverimage->user_id = $user_id;
            $coverimage->save();

            // Create and store profile photo
            if ($request->hasFile('profile')) {
                $profile = $request->file('profile');
                $profilepath = $profile->store('public/profile');
            } else {
                $defaultprofilefile = storage_path('app/public/' . $defaultprofile);
                $profilepath = Storage::putFile('public/profile', $defaultprofilefile);
            }

            $profileimage = new Image();
            $profileimage->image = $profilepath;
            $profileimage->imageable_id = $user_id;
            $profileimage->imageable_type = 'App\Model\User\Profile';
            $profileimage->user_id = $user_id;
            $profileimage->save();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }


        // return redirect(RouteServiceProvider::HOME);
        return redirect('blogs');
    }

}
