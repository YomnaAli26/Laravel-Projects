<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

//    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('guest')->except('logout');
    }
    protected function authenticated(Request $request, $user)
    {
        if ( $user->role_as) {
            return redirect('/admin/dashboard');
        }

        return redirect('site/home');
    }
    //Login With Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();

    }

    public function handleGoogleCallback()

    {

        try {

            $google_user = Socialite::driver('google')->user();


            $user = User::where('google_id',$google_user->getId())->first();

            if(!$user){
                $newUser = User::updateOrCreate([

                    'name' =>$google_user-> getName(),
                    'email' => $google_user->getEmail(),
                    'google_id'=>$google_user->getId(),

                ]);


                Auth::login($newUser);

                return redirect()->intended('site/home');

            }
            else
            {
                Auth::login($user);
                $user=User::find($user);
                return redirect()->intended('site/home');
            }



        } catch (Exception $e) {

            dd($e->getMessage());

        }

    }
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback()
    {
        try {

            $facebook_user = Socialite::driver('facebook')->user();


            $user = User::where('facebook_id',$facebook_user->getId())->first();

            if(!$user){
                $newUser = User::updateOrCreate([

                    'name' =>$facebook_user-> getName(),
                    'email' => $facebook_user->getEmail(),
                    'google_id'=>$facebook_user->getId(),

                ]);


                Auth::login($newUser);

                return redirect()->intended('site/home');

            }
            else
            {
                Auth::login($user);
                $user=User::find($user);
                return redirect()->intended('site/home');
            }



        } catch (Exception $e) {

            dd($e->getMessage());

        }


    }

}
