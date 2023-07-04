<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
class YogaController extends Controller
{
    public function index()
    {

        $videos=Video::where('yoga','!=','null')->get();
        return view('site.user.adult.yoga.index',["videos"=>$videos]);
    }
}
