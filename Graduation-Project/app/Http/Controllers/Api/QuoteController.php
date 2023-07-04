<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuoteResource;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public  function index()
    {
        $quotes = Quote::all();
        return QuoteResource::collection($quotes);
    }
}
