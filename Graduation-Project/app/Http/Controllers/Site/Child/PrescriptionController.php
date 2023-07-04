<?php

namespace App\Http\Controllers\site\child;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Prescription;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class PrescriptionController extends Controller
{   public function index()
{
    $prescriptions=Prescription::where('user_id','=',Auth::user()->id)->get();
    return view('site.user.child.Prescription',compact('prescriptions'));
}
}
