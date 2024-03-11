<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::filter(request(['search-category']))->orderBy('created_at','desc')->paginate(5)->withQueryString();
        return view('categories.index',['categories'=>$categories]);
    }
    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        
        $request->validate([
            'categoryname' => ['required', Rule::unique('categories', 'name')],
            'categoryslug' => ['required', Rule::unique('categories', 'slug')],
        ]);

        $category = New Category();
        $category->name = $request->categoryname;
        $category->slug = $request->categoryslug;
        $category->save();

        return redirect('dashboard/categories');
    }

    public function show(){

    }

    public function edit(Category $category){
        return view('categories.edit',['category'=>$category]);
    }

    public function update(Request $request,Category $category){
        $request->validate([
            'categoryname' => ['required', Rule::unique('categories', 'name')],
            'categoryslug' => ['required', Rule::unique('categories', 'slug')],
        ]);

        $category->name = $request->categoryname;
        $category->slug = $request->categoryslug;
        $category->save();

        return redirect('dashboard/categories');
    }

    public function destroy (Category $category){
        $category->delete();
        return redirect()->back();
    }
}