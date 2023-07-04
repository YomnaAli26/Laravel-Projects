<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles=Article::all();
        $category=Category::all();
        return view('admin.articles.index',compact('articles','category'));
    }

    public function create()
    {
        $categories=Category::all();
        return view('admin.articles.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'desc'=>['required'],
            'content'=>['required'],
            'img'=>['required','mimes:jpeg,jpg,png']
        ]);
        $data = $request->all();
        $destination_path = 'public/images/articles';
        $image = $request->file('img');
        $image_extension = $image->getClientOriginalExtension();
        $image_name = time(). '.'.$image_extension;
        $image->storeAs($destination_path,$image_name);
        $data['img'] = $image_name;

       Article::create($data);

     return redirect()->route('articles.index');
    }
    public function edit($article)
    {
        $article = Article::find($article);
        $categories = Category::all();
        return view("admin.articles.edit",compact("article","categories"));
    }
    public function update(Request $request,$article)
    {
        $request->validate([
            'desc'=>['required'],
            'content'=>['required'],
            'img'=>['required','mimes:jpeg,jpg,png']
        ]);
        $data = $request->all();
        $destination_path = 'public/images/articles';
        $image = $request->file('img');
        $image_extension = $image->getClientOriginalExtension();
        $image_name = time(). '.'.$image_extension;
        $image->storeAs($destination_path,$image_name);
        $data['img'] = $image_name;
        $article = Article::find($article);
        $article->desc = $request->input("desc");
        $article->content = $request->input("content");
        $article->cate_id = $request->input("cate_id");
        $article->img = $image_name;
        $article->save();
        return redirect()->route('articles.index');

    }
    public function destroy($article)
    {
        Article::destroy($article);
        return redirect()->route('articles.index');
    }
}
