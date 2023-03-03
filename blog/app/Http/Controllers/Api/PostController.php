<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostReuest;
use App\Http\Resources\PostRecource;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts =Post::paginate(5);
        return PostRecource::collection($posts);
    }
    public function show($post)
    {
        $post =Post::find($post);
        return new PostRecource($post);
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
        return 'Post Created Successfully';

    }
}
