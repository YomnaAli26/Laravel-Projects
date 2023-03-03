<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostReuest;
use App\Jobs\PruneOldPostsJob;
use App\Models\Post;
use App\Models\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Request $request)
    {

        $posts =Post::with('user')->paginate(15);
        return view('posts.index',['posts'=> $posts]);
    }
    public function show($post)
    {
        $post = Post::find($post);
        return view('posts.show',['post'=>$post]);

    }
    public function create()
    {

        return view('posts.create');
    }
    public function store(StorePostReuest $request)
    {

           $extension = $request->file('img')->getClientOriginalExtension();
           $fileName = time().'.'.$extension;
           $request->img->move('Images/Posts',$fileName);




        $post =  Post::create(
            [
             'title'=>$request->title,
             'description'=>$request->description,
             'user_id'=>Auth::user()->id,
              'created_at'=>Carbon::now()->toDateString(),
               'img'=>$fileName,
                'slug'=>$request->slug,
        ]

        );
        return redirect()->route('posts.index');

    }
    public function edit($post)
    {
        $post = Post::find($post);
        return view('posts.edit',['post'=>$post]);
    }
    public function update(StorePostReuest $request,$post)
    {

            $extension = $request->file('img')->getClientOriginalExtension();
            $fileName = time().'.'.$extension;
            $request->img->move('Images/Posts',$fileName);


        $post = Post::find($post);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->img = $fileName;
        $post->save();
        return redirect()->route('posts.index');
    }
    public function destroy($post)
    {
        Post::find($post)->forceDelete();
        return redirect()->route('posts.index');
    }
    public function softDelete($post)
    {
        Post::find($post)->delete();
        return redirect()->route('posts.index');

    }
    public function trash()
    {
        $posts = Post::onlyTrashed()->get();
        return view('posts.trashed',['posts'=>$posts]);
    }
    public function restore($post)
    {
        Post::whereId($post)->restore();
        return redirect()->route('posts.index');
    }
    public function restoreAll()
    {
        Post::onlyTrashed()->restore();
        return redirect()->route('posts.index');
    }
    public function oldPost()
    {
        $posts = Post::where('created_at','<',Carbon::now()->subYears(2))->get();
        PruneOldPostsJob::dispatch($posts);
        return redirect()->route('posts.index');

    }

}
