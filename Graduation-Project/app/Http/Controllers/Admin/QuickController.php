<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
class QuickController extends Controller
{
    public function index(){

        $videos=Video::where('quick_and_easy','!=','null')->get();
        return view('admin.videos.quick.index',["videos"=>$videos]);
    }
    public function create(){

        return view('admin.videos.quick.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,mp3,ogx,oga,ogv,ogg,webm,wav'
        ]);
        $destination_path = "public/videos/quick";
        $file = $request->file('video');
        $extension = $file->getClientOriginalExtension();
        $file_name = time().'.'.$extension;
        $file->storeAs($destination_path,$file_name);
       $insert=new Video();
       $insert->quick_and_easy = $file_name;
       $insert->save();


    return redirect()->route('quick.index');
    }}



