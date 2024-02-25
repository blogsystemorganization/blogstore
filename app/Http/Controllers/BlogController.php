<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function show($id){
        $blog = Blog::where("id",$id)->first();
        return view("blog.detail",['blog'=>$blog]);
    }

    public function edit($id){
        $blog = Blog::where("id",$id)->first();
        $categories = Category::all();
        return view("blog.edit",['blog'=>$blog , 'categories' => $categories]);
    }

    public function destroy(Blog $blog){
        $blog->delete();

        return redirect("profile");
    }
}
