<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use App\Models\UserCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    public function index()
    {
        $categories=category::all();
        return  CategoryResource::collection($categories);
    }


    public function store(Request $request)
    {
        UserCategory::create([
            'user_id'=>Auth::user()->id,
            'cate_id'=>$request->cate_id
        ]);
        return "Category Added to User Successfully";


    }
}
