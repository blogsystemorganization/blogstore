<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('categories.index',['categories'=>Category::paginate(5)->withQueryString()]);
    }
    public function show(){

    }
    public function destroy (Category $category){
        $category->delete();
        return redirect()->back();
    }
}