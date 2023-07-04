<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors=Doctor::all();
        return view('admin.doctors.index',compact('doctors'));
    }
    public function destroy($doctor)
    {
        Doctor::destroy($doctor);
        return redirect()->route('doctors.index');

    }
    public function create()
    {
        return view('admin.doctors.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        if($request->hasFile('img'))
        {
            $destination_path='/public/images/doctors';
            $image=$request->file('img');
            $extension = $image->getClientOriginalExtension();
            $image_name=time().'.'.$extension;
            $image->storeAs($destination_path,$image_name);

        }
        $data['img'] = $image_name;
        $data['password']=bcrypt($request->password);
        Doctor::create($data);

        return redirect()->route('doctors.index');
    }
    public function edit($doctor)
    {
        $doctor = Doctor::find($doctor);
        return view("admin.doctors.edit",compact("doctor"));
    }
    public function update(Request $request,$doctor)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'degree'=> ['required'],
            'experience'=>['required'],
            'about'=>['required'],
            'img' => ['required','mimes:jpeg,jpg,png']
        ]);
        $data = $request->all();
        $destination_path = 'public/images/doctors';
        $image = $request->file('img');
        $image_extension = $image->getClientOriginalExtension();
        $image_name = time() . '.' . $image_extension;
        $image->storeAs($destination_path, $image_name);
        $data['img'] = $image_name;
        $doctor = Doctor::find($doctor);
        $doctor->name = $request->input("name");
        $doctor->email = $request->input("email");
        $doctor->password = bcrypt($request->input("password"));
        $doctor->experience = $request->input("experience");
        $doctor->degree=$request->input("degree");
        $doctor->about = $request->input("about");
        $doctor->img = $image_name;
        $doctor->save();
        return redirect()->route('doctors.index');
    }
}
