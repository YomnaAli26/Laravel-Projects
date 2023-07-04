<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DoctorResource;
use App\Http\Resources\DoctorsResource;
use App\Http\Resources\FavouriteDoctorResource;
use App\Models\Doctor;
use App\Models\Rate;
use App\Models\User;
use App\Models\UserFavoiratePodcast;
use App\Models\UserFavoirateTherapist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function index()
    {
        $Doctors = Doctor::all();
        return  DoctorsResource::collection($Doctors);
    }


    public function show($id)
    {
        $Doctor =Doctor::find($id);
        return new DoctorResource($Doctor);
    }

    public function favourite()
    {
        $user = User::where('id','=',Auth::user()->id)->get();
        return FavouriteDoctorResource::collection($user);
    }
    public function store(Request $request,$doctorId)
    {
        $request->validate([
            'favourite' => ['required','in:1'],
        ]);
        UserFavoirateTherapist::create([
            'favourite' => $request->favourite,
            'doctor_id' => $doctorId,
            'user_id' => Auth::user()->id,

        ]);
        return "You Favourite Doctor Successfully";
    }
}
