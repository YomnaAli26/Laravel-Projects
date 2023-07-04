<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuickResource;
use App\Http\Resources\SleepResource;
use App\Http\Resources\SportResource;
use App\Http\Resources\StressResource;
use App\Http\Resources\YogaResource;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function show_yoga()
    {
        $yogaVideos = Video::all();
        return YogaResource::collection($yogaVideos);
    }
    public function recommendYoga()
    {
        return Video::all()->pluck("yoga");
    }
    public function show_sport()
    {
        $sportVideos = Video::all();
        return SportResource::collection($sportVideos);

    }
    public function show_quick_and_easy()
    {
        $videos = Video::all();
        return QuickResource::collection($videos);
    }
    public function recommendShow_quick_and_easy()
    {
        return Video::all()->pluck("quick_and_easy");

    }
    public function show_sleep_better_meditation()
    {
        $videos = Video::all();
        return SleepResource::collection($videos);
    }
    public function recommendShow_sleep_better_meditation()
    {
        return Video::all()->pluck("sleep_better_meditation");

    }

    public function show_stress()
    {
        $videos = Video::all();
        return StressResource::collection($videos);

    }
    public function recommendShow_stress()
    {
        return Video::all()->pluck("stress_management_meditation");
    }
}
