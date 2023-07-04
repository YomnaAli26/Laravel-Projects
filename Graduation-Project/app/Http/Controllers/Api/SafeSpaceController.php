<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SafeSpaceResource;
use App\Models\SafeSpace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SafeSpaceController extends Controller
{
    public function index()
    {
        $diaries =  SafeSpace::where('user_id','=',Auth::user()->id)->get();
        return SafeSpaceResource::collection($diaries);
    }
    public function store(Request $request)
    {
        $request->validate([
            'content' => ['required','in:1'],
        ]);
        SafeSpace::create([
            'content'=> $request->input('content'),
            'user_id'=>Auth::user()->id,
        ]);
        return "Diary Saved Successfully";


    }

}
