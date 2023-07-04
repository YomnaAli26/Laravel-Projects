<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Emotion;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::all();
        return view("admin.quotes.index",compact('quotes'));

    }
    public function create()
    {
        $emotions = Emotion::all();
        return view("admin.quotes.create",compact('emotions'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'img'=>['required','mimes:jpeg,jpg,png']
        ]);
        if($request->hasFile('img'))
        {
            $destination_path = 'public/images/Quotes';
            $image = $request->file('img');
            $image_extension = $image->getClientOriginalExtension();
            $image_name = time(). '.'.$image_extension;
            $image->storeAs($destination_path,$image_name);
        }
        Quote::create([
            'img'=>$image_name,
            'emotion_id'=>$request->emotion_id
        ]);
        return redirect()->route("quotes.index");

    }
    public function edit($quote)
    {
        $emotions = Emotion::all();
        return view("admin.quotes.edit",compact("emotions","quote"));
    }
    public function update(Request $request,$quote)
    {
        $quote = Quote::find($quote);
        $request->validate([

            'img'=>['required','mimes:jpeg,jpg,png']
        ]);

        if($request->hasFile("img"))
        {
            $destination_path = "public/images/quotes";
            $image = $request->file("img");
            $image_extension = $image->getClientOriginalExtension();
            $image_name = time().'.'.$image_extension;
            $image->storeAs($destination_path,$image_name);
        }
        $quote->eimg = $image_name;
        $quote->emotion_id = $request->input("emotion_id");
        $quote->save();
        return redirect()->route("emotions.index");
    }
    public function destroy($quote)
    {
        Quote::destroy($quote);
        return redirect()->route("quotes.index");
    }
}
