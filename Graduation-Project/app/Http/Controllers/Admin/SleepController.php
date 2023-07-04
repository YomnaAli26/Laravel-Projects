<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
class SleepController extends Controller
{
    public function index(){

        $videos=Video::where('sleep_better_meditation','!=','null')->get();
        return view('admin.videos.sleep.index',["videos"=>$videos]);
    }
    public function create(){

        return view('admin.videos.sleep.create');
    }

    function store(Request $request)
    {


        $request->validate([
            'video' => 'required|mimes:mp4,mp3,ogx,oga,ogv,ogg,webm,wav'
        ]);
        $destination_path = "public/videos/sleep";

        $file = $request->file('video');
        $extension = $file->getClientOriginalExtension();
        $file_name = time().'.'.$extension;
        $file->storeAs($destination_path,$file_name);
       $insert=new Video();
       $insert->sleep_better_meditation = $file_name;
       $insert->save();


    return redirect()->route('sleep.index');
    }}




