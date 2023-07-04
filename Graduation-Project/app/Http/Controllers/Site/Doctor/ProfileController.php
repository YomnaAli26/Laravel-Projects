<?php

namespace App\Http\Controllers\Site\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Post;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show($id)


    {
        $doctor =Doctor::find($id);

        $Posts = Post::where('doctor_id','=',$id)->get();
        $user_id = Review::where('doctor_id','=',$id)->get()->pluck("user_id");
        $users= User::find($user_id);
        $reviews=Review::where('doctor_id','=',$id)->get();
        return view('site.doctor.therapistprofile',["doctor"=>$doctor,"Posts"=>$Posts,"users"=>$users,"reviews"=>$reviews]);
    }
    public function store(Request $request)
    {

        $request->validate([
            'content' => ['required'],
        ]);

        $id=Auth::guard("doctors")->user()->id;
        Post::create([
            'content' =>$request->input("content"),
            'doctor_id'=>$id,

        ]);
        alert()->message('Post Send Successfully');

        return redirect()->back();

    }
    public function destroy($post)
    {

        Post::destroy($post);
        $doctor_id =Post::where("doctor_id",Auth::guard("doctors")->user()->id)->pluck("doctor_id");
        foreach ($doctor_id as $id) {
            $Posts = Post::where('doctor_id', '=', $id)->get();
            $user_id = Review::where('doctor_id', '=', $id)->get()->pluck("user_id");
            $doctor = Doctor::find($id);

            $users = User::find($user_id);
            $reviews = Review::where('doctor_id', '=', $id)->get();
        }
        alert()->message('You Deleted Post Successfully');

        return view('site.doctor.therapistprofile',["doctor"=>$doctor,"Posts"=>$Posts,"users"=>$users,"reviews"=>$reviews]);


    }
}
