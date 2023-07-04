<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Prescription;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class PrescriptionController extends Controller
{   public function index()
{
    $prescriptions=Prescription::where('user_id','=',Auth::user()->id)->get();
    return view('site.user.adult.Prescription',compact('prescriptions'));
}
// public function create(){

//   return view ('welcome');

// }
    public function store(Request $request)
    {
        $request->validate([
            'content' => ['required'],
        ]);


        Prescription::create([
            'content' => $request->input("content"),
            'user_id' =>$request->input("user_id"),
            'doctor_id'=>Auth::guard("doctors")->user()->id,
        ]);
        alert()->message('Prescription Added Successfully');

        return redirect()->route('prescription.show');
    }
    public function show()
{
    $prescriptions = Prescription::where('doctor_id',Auth::guard("doctors")->user()->id)->get();
    return view("site.doctor.prescriptions",compact('prescriptions'));
}





}
