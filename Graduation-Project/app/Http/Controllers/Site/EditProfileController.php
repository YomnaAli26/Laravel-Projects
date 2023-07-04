<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class EditProfileController extends Controller
{

    public function edit($id)
    {
        $users=User::find($id);

        return view('site.user.adult.edit-profile',compact('users'));
    }
    public function update(Request $request,$id)
    {
        $user=User::find($id);
        if ($request->hasFile('img'))
        {
            $destination_path='public/images/users';
            $image=$request->file('img');
            $image_extension=$image->getClientOriginalExtension();
            $image_name=time().'.'.$image_extension;
            $image->storeAs($destination_path,$image_name);
        }


             $user->name=$request->input('name');
             $user->phoneNumber=$request->input('phone');
             $user->DateOfBirth=$request->input('birthday');
             $user->password=Hash::make($request->input('newpass'));
             $user->email=$request->input('email');
             $user->img=$image_name;
             $user->save();



        return redirect()->route("home");


    }
}
