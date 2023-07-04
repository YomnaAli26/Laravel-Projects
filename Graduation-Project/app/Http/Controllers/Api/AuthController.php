<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
    public function register(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'unique:users|required',
            'password' => 'required',
            'date' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'device_name' => 'required',
        ];

        $input = $request->only('name', 'email', 'password', 'date', 'phone', 'gender', 'address', 'device_name');
        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'error' => $validator->messages()]);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'DateOfBirth' => $request->date,
            'password' => Hash::make($request->password),
            'PhoneNumber' => $request->phone,
            'Gender' => $request->gender,
            'Address' =>$request->address
        ]);
        return $user->createToken($request->device_name)->plainTextToken;

    }

    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user->createToken($request->device_name)->plainTextToken;
    }



    public function doctorLogin(Request $request)
    {
        $input = $request->all();
        $validation = Validator::make($input, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validation->fails()) {
            return response()->json(['error' => $validation->errors()], 422);
        }
        if (Auth::guard('doctors')->attempt(['email' => $input['email'], 'password' => $input['password']]))
        {
            $user = Auth::guard('doctors')->user();
            $token = $user->createToken('MyApp', ['doctors'])->plainTextToken;

            return response()->json(['tokan' => $token]);

        }
    }
}
