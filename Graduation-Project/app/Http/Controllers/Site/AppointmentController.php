<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function store(Request $request,$doctor_id)
    {
        $data= $request->all();
        $data['doctor_id'] =$doctor_id;
        $data['user_id'] = Auth::id();
        Appointment::create($data);
        alert()->message('Booking Added Successfully');
        return redirect()->route('therapist.show',$doctor_id);
    }
}
