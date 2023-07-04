<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Safespace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SafeSpaceController extends Controller
{
    public function index()
    {
        $safes_spaces = Safespace::where("user_id",Auth::id())->get();
        return view("site.user.adult.safe-space",compact('safes_spaces'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $user_id = Auth::id();
        $data['user_id'] = Auth::id();
        $s =Safespace::create($data);
        return redirect()->back();
    }
}
