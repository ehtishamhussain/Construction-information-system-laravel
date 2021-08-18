<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ContractorAuthCheck
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
        if(!session()->has('contractoruser') && ($request->path()!="contractorlogin")){
            return redirect("/contractorlogin")->with('fail',"You must be logged in");
        }
        if(session()->has('contractoruser')&&($request->path()=='contractorlogin')){
          return back();
        }

        return $next($request)->header('Cache-control','no-store, no-cache, max-age=0, must-revalidate')
        ->header('Pragma','no-cache')
        ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
    }
}
