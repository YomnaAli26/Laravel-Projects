<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;

class DoctorLoginController extends Controller
{
    public function create()
    {
        return view("auth.doctor-login");
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

            $credentials = $request->only("email","password");
//dd(Auth::guard('doctors')->attempt($credentials));

            if (Auth::guard('doctors')->attempt($credentials))
            {

                $doctor_id = Auth::guard('doctors')->id();
                return  redirect()->intended('profile/'.$doctor_id);
            }
            return redirect()->back()->with('error', 'Invalid Credentials');





    }
}
