<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Doctor;
use App\Models\Podcast;
use App\Models\UserFavoiratePodcast;
use App\Models\UserFavoirateTherapist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    public function index(){

        $podcast_id = UserFavoiratePodcast::where("user_id","=",Auth::user()->id)->where("favourite","1")->get()->pluck("podcast_id");
        $doctor_id= UserFavoirateTherapist::where("user_id","=",Auth::user()->id)->where("favourite","1")->get()->pluck("doctor_id");
//        $article_id= ::where("user_id","=",Auth::user()->id)->get()->pluck("doctor_id");
        $doctors = Doctor::find($doctor_id);
        $podcasts=Podcast::find($podcast_id);
        $category=Category::all();
        return view('site.user.adult.favourite.index0',compact('podcasts','category','doctors'));

    }
}
