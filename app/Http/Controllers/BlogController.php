<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class BlogController extends Controller
{
    public function create(){
        $categories = Category::all();
        return view("blog.create",['categories'=>$categories]);
    }

    public function store(Request $request){
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

    public function show($id){
        $blog = Blog::where("id",$id)->first();
        return view("blog.detail",['blog'=>$blog]);
    }

    public function edit($id){
        $blog = Blog::where("id",$id)->first();
        $categories = Category::all();
        return view("blog.edit",['blog'=>$blog , 'categories' => $categories]);
    }

    public function update(Request $request ,Blog $blog){
        try{
            
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
        }catch(Exception $e){
            dd($e->getMessage());
        }
    }

    public function destroy(Blog $blog){
        $blog->delete();

        return redirect("profile");
    }

   
}
