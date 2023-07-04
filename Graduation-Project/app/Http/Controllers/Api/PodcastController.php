<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriesResource;
use App\Http\Resources\FavouritePodcastResource;
use App\Http\Resources\PodcastsResource;
use App\Models\Podcast;
use App\Models\User;
use App\Models\UserFavoiratePodcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PodcastController extends Controller
{
    public function store(Request $request,$podcastId)
    {
        $request->validate([
            'favourite' => ['required','in:1'],
        ]);
        UserFavoiratePodcast::create([
            'favourite'=>$request->favourite,
            'podcast_id'=>$podcastId,
            'user_id'=>Auth::user()->id,

        ]);
        return "You Favourite Podcast Successfully";

    }
    public function favourite()
    {
        $user = User::where('id','=',Auth::user()->id)->get();
        return FavouritePodcastResource::collection($user);
    }
    public function index()
    {
        $user = User::where('id','=',Auth::user()->id)->get();
        return PodcastsResource::collection($user);
    }
    public function recommend()
    {
        return Podcast::all();
    }

}
