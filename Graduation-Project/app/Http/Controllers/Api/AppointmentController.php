<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AppointmentResource;
use App\Http\Resources\AppointmentsResource;
use App\Http\Resources\DoctorAppointmentResource;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function store(Request $request,$id)
    {
        $request->validate([
            'date' => ['required'],
            'time' => ['required'],
            'slot' => ['required'],
        ]);
        Appointment::create([
             'Date'=>$request->input("date"),
             'Time'=>$request->input("time"),
             'slot'=>$request->input("slot"),
             'user_id'=>Auth::user()->id,
             'doctor_id'=>$id


            ]);
        return "Booking Confirmed";

    }

    public function show($doctorId)
    {
        $appointent = Appointment::where('doctor_id','=',$doctorId)->where('user_id','=',Auth::user()->id)->latest()->first();
        return new AppointmentResource($appointent);

    }

    public function index()
    {
        $user = User::where('id','=',Auth::user()->id)->get();
        return AppointmentsResource::collection($user) ;
    }

    public function appDoctor()
    {
        $apointments = Appointment::where('doctor_id','=',Auth::user()->id)->orderBy('Time','asc')->orderBy('Date','asc')->get();
        return DoctorAppointmentResource::collection($apointments);
    }
}
