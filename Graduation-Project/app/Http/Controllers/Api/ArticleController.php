<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\UserCategoryResource;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index(){
        $user = User::where('id','=',Auth::user()->id)->get();
        return UserCategoryResource::collection($user);

    }
    public function recommend()
    {

        return Article::all();

    }
}
