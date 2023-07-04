<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PrescriptionResource;
use App\Models\Message;
use App\Models\Prescription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrescriptionController extends Controller
{
    public function index()
    {
        $prescriptions = Prescription::where('user_id','=',Auth::user()->id)->get();
        return PrescriptionResource::collection($prescriptions);
    }
    public function store(Request $request,$userId)
    {
        $request->validate([
            'content' => ['required'],
        ]);

        Prescription::create([
            'content' => $request->input("content"),
            'user_id' =>$userId,
            'doctor_id'=>Auth::user()->id,
        ]);
        return "Prescription added Successfully";

    }
}
