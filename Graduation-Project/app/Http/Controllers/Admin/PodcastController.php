<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Podcast;
use App\Models\Category;
class PodcastController extends Controller
{
    public function index()
    {
        $Podcasts=Podcast::all();
        $category=Category::all();
        return view('admin.podcasts.index',["Podcasts"=>$Podcasts,"category"=>$category]);
    }
    public function create()
    {
        $category=Category::all();
        return view('admin.podcasts.create',compact('category'));
    }


    public function store(Request $request)
    {
       $request->validate([
           'video' => 'required|mimes:mp4,mp3,ogx,oga,ogv,ogg,webm,wav'
       ]);
       $destination_path = "public/videos/podcasts";

       $file = $request->file('video');
       $extension = $file->getClientOriginalExtension();
       $file_name = time().'.'.$extension;
       $file->storeAs($destination_path,$file_name);

        $destination_path = "public/images/podcasts";
        $file = $request->file('img');
        $extension = $file->getClientOriginalExtension();
        $file_name = time().'.'.$extension;
        $file->storeAs($destination_path,$file_name);

       $insert=new Podcast();
       $insert->name = $request->name;
       $insert->video = $file_name;
       $insert->img = $request->img;
       $insert->cate_id=$request->cate_id;
       $insert->save();


   return redirect()->route('podcasts.index');
 }
    public function edit($podcast)
    {
        $category = Category::all();
        $podcast = Podcast::find($podcast);
        return view("admin.podcasts.edit",compact("podcast","category"));

    }
    public function update($podcast,Request $request)
    {
        $podcast = Podcast::find($podcast);
        $request->validate([
            'video' => 'required|mimes:mp4,mp3,ogx,oga,ogv,ogg,webm,wav'
        ]);
        $destination_path = "public/videos/podcasts";

        $file = $request->file('video');
        $extension = $file->getClientOriginalExtension();
        $file_name = time().'.'.$extension;
        $file->storeAs($destination_path,$file_name);
        $podcast->name = $request->name;
        $podcast->video = $file_name;
        $podcast->cate_id=$request->cate_id;
        $podcast->save();
        return redirect()->route('podcasts.index');
    }
    public function destroy($podcast)
    {
        Podcast::destroy($podcast);
        return redirect()->route('podcasts.index');

    }
}
