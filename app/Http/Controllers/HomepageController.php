<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {

        // $blogs = Blog::with('category', 'user')->orderBy('title')->filter(request(['search', 'username', 'category']))
        //     ->paginate(3)
        //     ->withQuerystring();

        // // $blogs = Blog::with('category', 'user')->orderBy('title')->paginate(3); // fix n+1 problem before looping
        // $title = "My Blog Title";
        return view('homepages/index');
    }

    public function show(){
        
    }
}

