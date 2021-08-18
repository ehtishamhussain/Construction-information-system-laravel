<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('Loggeduser')&& ($request->path() !='Userslogin' &&$request->path()!='/register')){
            return redirect('/Userslogin')->with('Not','You must be logged in');
        }
        if (session()->has('Loggeduser')&&($request->path()=='Userslogin')){
            return back();
        }
        return $next($request)->header('Cache-control','no-store, no-cache, max-age=0, must-revalidate')
                            ->header('Pragma','no-cache')
                            ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');

    }
}
