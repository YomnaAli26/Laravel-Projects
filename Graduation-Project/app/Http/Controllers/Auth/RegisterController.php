<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserCategory;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender'=>['required'],
            'date'=>['required'],
            'phone'=>['required'],
            'address'=>['required','string','max:255'],
            'img'=>['required','mimes:jpeg,jpg,png']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function create(array $data)
    {
        if (request()->hasFile('img')) {
            $destination_path = 'public/images/users';
            $image = request()->file('img');
            $image_extension = $image->getClientOriginalExtension();
            $image_name = time(). '.'.$image_extension;
            $image->storeAs($destination_path, $image_name);
        }
        $unvalid_dates = CarbonPeriod::create('2017-01-1', Carbon::now()->format("Y-m-d"));
//        if ($unvalid_dates->contains($data['date']))
//        {
//            return redirect()->route("register")->with('success','You too younger ti sign in in our application');
//        }
//        else
//        {
            $user=User::create([
                'name' => $data['name'],
                'Gender'=>$data['gender'],
                'DateOfBirth'=>$data['date'],
                'PhoneNumber'=>$data['phone'],
                'Address'=>$data['address'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'img'=>$image_name,
            ]);
            UserCategory::create([
                'user_id'=>$user->id,
                'cate_id'=>$data['addiction']
            ]);
            return $user;

        }

//    }

}
