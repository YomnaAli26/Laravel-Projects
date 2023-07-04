<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("admin.categories.index",compact('categories'));
    }
    public function create()
    {
        return view("admin.categories.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required','max:20'],
            'img'=>['required','mimes:jpeg,jpg,png']
        ]);
        if($request->hasFile('img'))
        {
            $destination_path = 'public/images/categories';
            $image = $request->file('img');
            $image_extension = $image->getClientOriginalExtension();
            $image_name = time(). '.'.$image_extension;
            $image->storeAs($destination_path,$image_name);
        }
        Category::create([
            'name'=>$request->input("name"),
            'img'=>$image_name
        ]);
        return redirect()->route("categories.index");
    }
    public function edit($category)
    {
        $category = Category::find($category);
        return view("admin.categories.edit",compact('category'));
    }
    public function update(Request $request,$category)
    {
        $request->validate([
            'name'=>['required','max:20'],
            'img'=>['required','mimes:jpeg,jpg,png']
        ]);
        if($request->hasFile('img'))
        {
            $destination_path = 'public/images/categories';
            $image = $request->file('img');
            $image_extension = $image->getClientOriginalExtension();
            $image_name = time(). '.'.$image_extension;
            $image->storeAs($destination_path,$image_name);
        }
        $category = Category::find($category);
        $category->name = $request->name;
        $category->img =$image_name;
        $category->save();
        return redirect()->route("categories.index");
    }
    public function destroy($category)
    {
        Category::destroy($category);
        return redirect()->route("categories.index");
    }
}
