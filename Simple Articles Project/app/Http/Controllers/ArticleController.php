<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;


class ArticleController extends Controller
{
    function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
    function index()
    {
        $articles = Article::all();
        return view('article.index',compact('articles'));
    }
    function create()
    {
        return view('article.create');

    }
    function store(StoreArticleRequest $request)
    {
        //id
        $id = Auth::id();
        //Save Image
        $file_extension = $request->img->getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'images/articles';
        $request->img->move($path,$file_name);
        //insert
        Article::create([
            'title' => $request->title,
            'description'=>$request->desc,
            'img'=>$file_name,
            'body'=>$request->body,
            'user_id'=>$id
            ]);

        return redirect('/articles');

    }
    function show($id)
    {
        $article = Article::find($id);
        return view('article.view',compact('id','article'));

    }
    function edit($id)
    {
        $article = Article::find($id);
       $this->authorize('update',$article);
        return view('article.edit',compact('id','article'));
    }
    function update(StoreArticleRequest $request,$id)
    {

        $article = Article::find($id);
        $this->authorize('update',$article);
        $article->title = $request->title;
        $article->description = $request->desc;

        $image_name = $request->hidden_image;
        $image = $request->file('img');
        if($image != '')
        {
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/articles'),$image_name);
        }
        $article->img = $image_name;

        $article->body = $request->body;
        $article->save();


        return redirect('/articles');



    }
    function destroy($id)
    {
        $article = Article::find($id);
        $this->authorize('delete',$article);
        Article::destroy($id);
        return redirect('/articles');
    }
}
