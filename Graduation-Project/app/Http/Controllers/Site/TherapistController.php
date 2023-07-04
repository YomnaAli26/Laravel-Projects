<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Post;
use App\Models\Review;
use App\Models\User;
use App\Models\UserFavoirateTherapist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use UxWeb\SweetAlert\SweetAlert;

class TherapistController extends Controller
{
    public function index()
    {
        $doctorsdiv1 = Doctor::all()->take(3);
        $doctorsdiv2 = DB::table('doctors')->latest('created_at','desc')->take(3)->get();
        $Posts = Post::all();
        $favourite= UserFavoirateTherapist::where("user_id","=",Auth::user()->id)->get()->pluck("favourite");

        return view('site.user.adult.therapists.index',["doctorsdiv1"=>$doctorsdiv1,"doctorsdiv2"=>$doctorsdiv2,"Posts"=>$Posts,"favourite",$favourite]);
    }
    public function show($id)
    {
        $doctor =Doctor::find($id);

        $Posts = Post::where('doctor_id','=',$id)->get();
        $user_id = Review::where('doctor_id','=',$id)->get()->pluck("user_id");
        $users= User::find($user_id);
        $reviews=Review::where('doctor_id','=',$id)->take(3)->get();
        return view('site.user.adult.therapists.show',["doctor"=>$doctor,"Posts"=>$Posts,"users"=>$users,"reviews"=>$reviews]);
    }
    public function like($id)
    {

       $favourite =  UserFavoirateTherapist::where("doctor_id",$id)->where("user_id",Auth::id())->get();
       foreach ($favourite as $fav)
       {
           if ($fav->favourite == "1")
           {
              $fav->favourite = "0";

              $fav->save();
               $name = Doctor::where('id',$fav->doctor_id)->pluck("name");

               alert()->message('You Deleted '.$name[0].' From Favourites');

               return redirect()->route('therapist.index');
           }

       }
        $doctor_id=$id;
        $user_id=Auth::user()->id;
        $favourite=new UserFavoirateTherapist();
        $favourite->doctor_id=$doctor_id;
        $favourite->user_id=$user_id;
        $favourite->favourite=1;
        $favourite->save();
        $name = Doctor::where('id',$doctor_id)->pluck("name");
        alert()->message('You Added '.$name[0].' To Favourites');
        return redirect()->route('therapist.index')->with('status',"hh");


    }
    public function review($id,Request $request)
    {
        $doctor_id=$id;
        $data =$request->all();
        $data['doctor_id'] = $doctor_id;
        $data['user_id'] = Auth::id();
        Review::create($data);
        alert()->message('Review Added Successfully');

        return redirect()->route('therapist.show',$doctor_id);


    }
}
