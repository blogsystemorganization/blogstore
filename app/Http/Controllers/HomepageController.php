<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class HomepageController extends Controller
{
    public function index()
    {

        // $blogs = Blog::with('category', 'user')->orderBy('title')->filter(request(['search', 'username', 'category']))
        //     ->paginate(3)
        //     ->withQuerystring();

        // // $blogs = Blog::with('category', 'user')->orderBy('title')->paginate(3); // fix n+1 problem before looping
        // $title = "My Blog Title";
        return view('homepages/index', [
            "blogs" => Blog::all(),
            "categories" => Category::all()
        ]);
    }

    public function show()
    {
    }
}
