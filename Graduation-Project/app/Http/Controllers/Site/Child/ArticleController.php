<?php

namespace App\Http\Controllers\Site\child;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\UserCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        $userCategory = UserCategory::where("user_id", Auth::user()->id)->pluck("cate_id");

        $articles = DB::table('articles')->where("user_type","=","0")
            ->where("cate_id", $userCategory)->latest('created_at','desc')->take(4)->get();

        return view('site.user.child.articles.index0',compact('articles'));
    }
    public function search(){
        $search_text=$_GET['query'];
        $article=Article::where('desc','LIKE','%'.$search_text.'%')->get();
        return view('site.user.child.articles.search',compact('article'));
    }
    public function show($id){
        $article=Article::find($id);
        return view('site.user.child.articles.show',compact('article'));
    }
}
