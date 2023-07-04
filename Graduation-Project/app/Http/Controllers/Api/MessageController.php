<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MessageResource;
use App\Models\Doctor;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index($doctorId)
    {
        $messages = Message::where('user_id','=',Auth::user()->id)->where('doctor_id','=',$doctorId)->get();
        return  MessageResource::collection($messages);
    }

    public function store(Request $request,$doctorId)
    {
        Message::create([
            'content'=>$request->input('content'),
            'user_id'=>Auth::user()->id,
            'doctor_id'=>$doctorId,
        ]);
        return "Message Send Successfully";

    }
}
