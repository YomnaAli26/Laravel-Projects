<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Doctor;
use App\Models\Podcast;
use App\Models\User;
use App\Models\UserCategory;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $child_dates= CarbonPeriod::create('2008-01-1', '2016-12-31');
            if ($child_dates->contains(Auth::user()->DateOfBirth))
            {
                $userCategory = UserCategory::where("user_id", Auth::user()->id)->pluck("cate_id");
                $users = User::all();
                $doctors = Doctor::all()->take(3);
                $articles = Article::where("user_type", "=", "0")->where("cate_id", $userCategory)->take(4)->get();
                $podcasts = Podcast::where("user_type", "=", "0")->take(4)->get();
                return view("site.user.child.home", compact('users', 'doctors', 'articles', 'podcasts'));
            }
            else
            {
                $userCategory = UserCategory::where("user_id", Auth::user()->id)->pluck("cate_id");

                $users = User::all();
                $doctors = Doctor::all()->take(3);
                $articles = Article::where("user_type", "=", "1")->where("cate_id", $userCategory)->take(4)->get();
                $podcasts = Podcast::where("user_type", "=", "1")->take(4)->get();
                return view('site.user.adult.home', compact('users', 'doctors', 'articles', 'podcasts'));
            }
        }

    public function doctorHome()
    {
        return view('site.doctor.home');
    }


}
