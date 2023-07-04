<?php

namespace App\Http\Controllers\Site\child;

use App\Http\Controllers\Controller;
use App\Models\Podcast;
use App\Models\UserCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PodcastController extends Controller
{
    public function index(){
        $userCategory = UserCategory::where("user_id", Auth::user()->id)->pluck("cate_id");
        $podcasts=Podcast::where("user_type","=","0")->where("cate_id", $userCategory)->get();
        return view('site.user.child.podcast.index0',compact('podcasts'));

    }
}
