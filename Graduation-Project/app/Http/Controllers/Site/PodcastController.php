<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Podcast;
use App\Models\UserFavoiratePodcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PodcastController extends Controller
{
    public function index(){

        $podcasts=Podcast::where("user_type","=","1")->get();
        return view('site.user.adult.podcast.index0',compact('podcasts'));
    }
    public function show($id){
        $pod=Podcast::find($id);
        $podcasts=Podcast::all();
        return view('site.user.adult.podcast.show',compact('pod','podcasts'));

    }
    public function like($id){
        $podcast_id=$id;
        $user_id=Auth::user()->id;
        $favourite=new UserFavoiratePodcast();
        $favourite->podcast_id=$podcast_id;
        $favourite->user_id=$user_id;
        $favourite->favourite=1;
        $favourite->save();
        return redirect()->route('podcast.show',$id);
    }
}
