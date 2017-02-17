<?php

namespace App\Http\Middleware;

use Closure;
use input;
// use Auth;
use Illuminate\Support\Facades\Auth;

class AgeMiddleware
{
    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)

    {   if(Auth::user()->age <= 20)
        {
            return('you r resticted to access this page due to your age');
        }
        
    return $next($request);
        
    }
}
