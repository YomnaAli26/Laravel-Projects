<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReviewsResource;
use App\Models\Doctor;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index($doctor_id)
    {
        $reviews = Review::where('doctor_id','=',$doctor_id)->get();
        return ReviewsResource::collection($reviews);

    }

    public function store(Request $request,$doctorId)
    {
        $request->validate([
            'content' => ['required','in:1'],
        ]);
        Review::create([
            'user_id'=> Auth::user()->id,
            'doctor_id'=> $doctorId,
            'content'=> $request->input('content'),

        ]);
        return "Review Added Successfully";

    }
}
