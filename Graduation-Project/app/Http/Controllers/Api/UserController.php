<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function show()
    {
        $userInfo = User::where('id','=',Auth::user()->id)->get();
        return UserResource::collection($userInfo);
    }
    public function update(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'unique:users|required',
            'password' => 'required',
            'date' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required',
        ];

        $input = $request->only('name', 'email', 'password', 'date', 'phone', 'gender', 'address', 'device_name');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'error' => $validator->messages()]);
        }

        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->PhoneNumber = $request->phone;
        $user->email  = $request->email;
        $user->DateOfBirth = $request->date;
        $user->Address = $request->address;
        $user->Gender = $request->gender;
        $user->save();
        return "User Info Updated Successfully";
    }

}
