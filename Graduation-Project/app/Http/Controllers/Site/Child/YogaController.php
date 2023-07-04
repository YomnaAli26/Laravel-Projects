<?php

namespace App\Http\Controllers\site\child;

use App\Http\Controllers\Controller;
use App\Models\Yoga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class YogaController extends Controller
{
    public function index(){
        $yoga=DB::table('yogas')->latest('created_at','desc')->take(4)->get();
        $yogo=Yoga::all();
        return view('site.user.child.yoga.index0',compact('yoga','yogo'));
    }

    public function show($id){
        $yoga=Yoga::where('id','=',$id)->get();
        return view('site.user.child.yoga.show',compact('yoga'));
    }
}
