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
        $blogs = Blog::with('category', 'user','image')->orderBy('created_at', 'desc')->filter(request(['search', 'username', 'category']))
            ->paginate(6)
            ->withQuerystring();
        
        return view('blog.index', ["blogs" => $blogs]);
    }
    public function create()
    {
        return view("blog.create", ['categories' => Category::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'intro' => 'required',
            'photo' => 'required',
            'body' => 'required'
        ]);
        

        $blog = new Blog();

        $blog->title = $request->title;
        $blog->slug = $request->title;
        $blog->category_id = $request->category_id;
        $blog->intro = $request->intro;
        $blog->body = $request->body;
        $blog->user_id = Auth::user()->id;
        // $blog->publish = $request->publish;
        $blog->save();

        $blogImage = $request['photo'];
        $blogpath = $blogImage->store('public/blogs');

        $user_id = Auth::user()->id;
        $blogimage = new Image();
        $blogimage->image = $blogpath;
        $blogimage->imageable_id = $blog->id;
        $blogimage->imageable_type = Blog::class;
        $blogimage->user_id = $user_id;
        $blogimage->save();
        return redirect("profile");
    }

    public function show(Blog $blog)
    {
        $comments = $blog->comments()->latest()->paginate(5);
        return view("blog.detail", [
            'blog' => $blog,
            'comments' => $comments
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
