<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Emotion;
use Illuminate\Http\Request;

class EmotionController extends Controller
{
    public function index()
    {
        $emotions = Emotion::all();
        return view("admin.emotions.index",compact('emotions'));
    }
    public function create()
    {
        return view("admin.emotions.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required','max:10'],
            'emotion_img'=>['required','mimes:jpeg,jpg,png']
        ]);

        if($request->hasFile("emotion_img"))
        {
            $destination_path = "public/images/emotions";
            $image = $request->file("emotion_img");
            $image_extension = $image->getClientOriginalExtension();
            $image_name = time().'.'.$image_extension;
            $image->storeAs($destination_path,$image_name);
        }



        Emotion::create([
            'name'=>$request->input("name"),
            'emotion_img'=>$image_name
        ]);
        return redirect()->route("emotions.index");

    }
    public function edit($emotion)
    {
        $emotion = Emotion::find($emotion);
        return view("admin.emotions.edit",compact('emotion'));
    }
    public function update(Request $request,$emotion)
    {
        $emotion = Emotion::find($emotion);
        $request->validate([
            'name'=>['required'],
            'emotion_img'=>['required','mimes:jpeg,jpg,png']
        ]);

        if($request->hasFile("emotion_img"))
        {
            $destination_path = "public/images/emotions";
            $image = $request->file("emotion_img");
            $image_extension = $image->getClientOriginalExtension();
            $image_name = time().'.'.$image_extension;
            $image->storeAs($destination_path,$image_name);
        }
        $emotion->emotion_img = $image_name;
        $emotion->name = $request->input("name");
        $emotion->save();
        return redirect()->route("emotions.index");

    }
    public function destroy($emotion)
    {
        $emotion = Emotion::destroy($emotion);
        return redirect()->route("emotions.index");

    }

}
