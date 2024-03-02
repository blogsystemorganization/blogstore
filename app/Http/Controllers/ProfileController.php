<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Str;
use App\Models\Profile;

class ProfileController extends Controller
{

    public function index()
    {
        $user_id = Auth::user()->id;
        $user = User::where("id", $user_id)->first();
        $blogs = Blog::where("user_id", $user_id)->orderBy("created_at", 'desc')->get();



        $cover = Image::where('imageable_id', $user_id)->where('imageable_type', 'App\Model\User\Cover')->get();
        $profile = Image::where('imageable_id', $user_id)->where('imageable_type', 'App\Model\User\Profile')->get();

        // dd($cover->last()->image);

        return view('profile.index', ["blogs" => $blogs, "user" => $user, "cover" => $cover, "profile" => $profile]);
    }


    public function edit()
    {
        $user_id = Auth::user()->id;

        $cover = Image::where('imageable_id', $user_id)->where('imageable_type', 'App\Model\User\Cover')->get();
        $profile = Image::where('imageable_id', $user_id)->where('imageable_type', 'App\Model\User\Profile')->get();

        // dd($cover->last()->image);

        return view('profile.edit', ["cover" => $cover, "profile" => $profile]);
    }


    public function store(Request $request)
    {


        return view('profile.index');


    }





    public function update(Request $request)
    {


        $this->validate($request, [
            'cover' => 'image',
            'profile' => 'image'
        ]);



        $user_id = Auth::user()->id;

        $profile = User::findOrFail($user_id);
        try {

            // Create and store cover photo
            if (file_exists($request['cover'])) {


                // Delete old cover photo
                $oldcover = Image::where('imageable_id', $user_id)
                    ->where('imageable_type', 'App\Model\User\Cover')
                    ->latest()->first();

                // dd($oldcover);
                if ($oldcover) {
                    Storage::delete($oldcover->image);
                    $oldcover->delete();
                }


                $cover = $request['cover'];
                $coverpath = $cover->store('public/profile');


                $coverimage = new Image();
                $coverimage->image = $coverpath;
                $coverimage->imageable_id = $user_id;
                $coverimage->imageable_type = 'App\Model\User\Cover';
                $coverimage->user_id = $user_id;
                $coverimage->save();



            }

            // Create and store profile photo
            if ($request->hasFile('profile')) {

                // Delete old profile photo
                $oldprofile = Image::where('imageable_id', $user_id)
                    ->where('imageable_type', 'App\Model\User\Profile')
                    ->latest()->first();
                if ($oldprofile) {
                    Storage::delete($oldprofile->image);
                    $oldprofile->delete();
                }

                $profile = $request->file('profile');
                $profilepath = $profile->store('public/profile');

                $profileimage = new Image();
                $profileimage->image = $profilepath;
                $profileimage->imageable_id = $user_id;
                $profileimage->imageable_type = 'App\Model\User\Profile';
                $profileimage->user_id = $user_id;
                $profileimage->save();


            }

        } catch (\Exception $e) {
            dd($e->getMessage());
        }




        return redirect()->route('profile.index');

    }





    // breeze default 

    // public function edit(Request $request): View
    // {
    //     return view('profile.edit', [
    //         'user' => $request->user(),
    //     ]);
    // }

    // /**
    //  * Update the user's profile information.
    //  */
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }

    // /**
    //  * Delete the user's account.
    //  */
    // public function destroy(Request $request): RedirectResponse
    // {
    //     $request->validateWithBag('userDeletion', [
    //         'password' => ['required', 'current_password'],
    //     ]);

    //     $user = $request->user();

    //     Auth::logout();

    //     $user->delete();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return Redirect::to('/');
    // }
}
