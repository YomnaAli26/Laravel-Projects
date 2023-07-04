<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RateRequest;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RateController extends Controller
{
    public function store(RateRequest $request,$doctorId)
    {
        $request->validate([
            'rate' => ['required'],
        ]);
        Rate::create([
            'rate'=>$request->input("rate"),
            'user_id'=>Auth::user()->id,
            'doctor_id'=>$doctorId,

        ]);
        return "You rated Doctor Successfully";
    }
}
