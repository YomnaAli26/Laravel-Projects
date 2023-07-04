<?php

namespace App\Http\Middleware;

use Closure;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->role_as == '1')#0 for User ,and 1 for Admin
            {
                return $next($request);
            }
            else
            {
                return redirect('/home')->with('status','Acess Denied! as are not as Admin');
            }

        }
        else
        {
            return redirect('/home')->with('status','Please Login First');
        }

    }
}
