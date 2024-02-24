<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function detail($id){
        $blog = Blog::where("id",$id)->first();
        return view("blog.detail",['blog'=>$blog]);
    }
}
