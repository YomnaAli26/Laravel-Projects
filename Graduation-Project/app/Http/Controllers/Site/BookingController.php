<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $appointments = Appointment::where("user_id",Auth::id())->get();
       return view("site.user.adult.booking",compact('appointments'));

    }
    public function show()
    {
        $appointments = Appointment::where("doctor_id",Auth::guard('doctors')->id())->get();
        return view("site.doctor.booking",compact('appointments'));

    }
}
