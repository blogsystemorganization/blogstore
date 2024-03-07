<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Image;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class BlogController extends Controller
{
    public function index()
    {

        $blogs = Blog::with('category', 'user')->orderBy('created_at', 'desc')->filter(request(['search', 'username', 'category']))
            ->paginate(6)
            ->withQuerystring();

        // // $blogs = Blog::with('category', 'user')->orderBy('title')->paginate(3); // fix n+1 problem before looping
        // $title = "My Blog Title";

        $user_id = Auth::user()->id;
        $profile = Image::where('imageable_id', $user_id)->where('imageable_type', 'App\Model\User\Profile')->get();


        return view('homepages/index', [
            "blogs" => $blogs,
            "categories" => Category::all(),
            'profile' => $profile
        ]);
    }
    public function create()
    {
        $categories = Category::all();
        return view("blog.create", ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $blog = new Blog();

        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'intro' => 'required',
            'body' => 'required'
        ]);

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

    public function show(Blog $blog)
    {
        // $blog = Blog::where("id", $id)->first();
        $comments = $blog->comments()->latest()->paginate(5);

        $user_id = Auth::user()->id;
        $profile = Image::where('imageable_id', $user_id)->where('imageable_type', 'App\Model\User\Profile')->get();

        return view("blog.detail", [
            'blog' => $blog,
            'comments' => $comments,
            'profile' => $profile
        ]);
    }

    public function edit($id)
    {
        $blog = Blog::where("id", $id)->first();
        $categories = Category::all();
        return view("blog.edit", ['blog' => $blog, 'categories' => $categories]);
    }

    public function update(Request $request, Blog $blog)
    {
        try {

            $request->validate([
                'title' => 'required',
                'category_id' => 'required',
                'intro' => 'required',
                'body' => 'required'
            ]);

            $blog->title = $request->title;
            $blog->slug = $request->title;
            $blog->category_id = $request->category_id;
            $blog->intro = $request->intro;
            $blog->body = $request->body;
            $blog->save();

            return redirect("profile");
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect("profile");
    }
}
