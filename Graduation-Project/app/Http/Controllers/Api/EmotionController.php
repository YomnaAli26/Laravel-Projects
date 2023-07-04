<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmotionResource;
use App\Models\Emotion;
use Illuminate\Http\Request;

class EmotionController extends Controller
{
    public function index()
    {
        $emotions = Emotion::all();
        return EmotionResource::collection($emotions);
    }
}
