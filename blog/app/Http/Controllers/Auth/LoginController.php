<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //Login With GitHub
    public function redirectToGithub()

    {

        return Socialite::driver('github')->redirect();

    }

    public function handleGithubCallback()

    {

        try {

            $github_user = Socialite::driver('github')->user();




            $user = User::where('github_id', $github_user->getId())->first();


            if(!$user){

                $newUser = User::updateOrCreate([
                    'github_id' => $github_user->getId(),

                    'name' => $github_user->getNickname(),

                    'email' => $github_user->getEmail(),

                    'github_token' => $github_user->token,

                    'github_refresh_token' => $github_user->refreshToken,

                ]);

                Auth::login($newUser);

                return redirect()->intended('posts');

            }

            else {

                Auth::login($user);
                return redirect()->intended('posts');


            }
        } catch (Exception $e) {

            dd($e->getMessage());

        }

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

                    'google_id'=>$google_user->getId()

                ]);

                Auth::login($newUser);

                return redirect()->intended('posts');

            }
            else
            {
                Auth::login($user);
                return redirect()->intended('posts');
            }



        } catch (Exception $e) {

            dd($e->getMessage());

        }

    }




}
