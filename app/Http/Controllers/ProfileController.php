<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Illuminate\Support\Str;

class ProfileController extends Controller
{

    public function index()
    {
        $user_id = Auth::user()->id;
        $user = User::where("id",$user_id)->first();
        $blogs = Blog::where("user_id",$user_id)->orderBy("created_at",'desc')->get();
        return view('profile.index',["blogs"=>$blogs, "user"=>$user]);
    }


    public function edit()
    {
        return view('profile.edit');
    }

    public function create(){
        $categories = Category::all();
        return view("profile.addNewBlog",['categories'=>$categories]);
    }

    public function store(Request $request){
        $blog = new Blog();

        $blog->title = $request->title;
        $blog->slug = $request->title;
        $blog->category_id = $request->category_id;
        $blog->intro = $request->intro;
        $blog->body = $request->body;
        $blog->user_id = Auth::user()->id;
        // $blog->publish = $request->publish;
        $blog->save();

        return redirect("profile");
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
