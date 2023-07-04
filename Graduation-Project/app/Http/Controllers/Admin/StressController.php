<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
class StressController extends Controller
{
    public function index(){

        $videos=Video::where('stress_management_meditation','!=','null')->get();
        return view('admin.videos.stress.index',["videos"=>$videos]);
    }
    public function create(){

        return view('admin.videos.stress.create');
    }

    function store(Request $request)
    {

        $request->validate([
            'video' => 'required|mimes:mp4,mp3,ogx,oga,ogv,ogg,webm,wav'
        ]);
        $destination_path = "public/videos/stress";
        $file = $request->file('video');
        $extension = $file->getClientOriginalExtension();
        $file_name = time().'.'.$extension;
        $file->storeAs($destination_path,$file_name);
       $insert=new Video();
       $insert->stress_management_meditation = $file_name;
       $insert->save();


    return redirect()->route('stress.index');
    }}




