<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class HasSchool
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
       
        if(Auth::user()->is_school == 1 || Auth::user()->is_school == 0 ){
            return $next($request);
        }else{
            return redirect()->back();
        }


        
    }
}
