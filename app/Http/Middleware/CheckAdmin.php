<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class CheckAdmin
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
            if (Auth::check() && Auth::User()->role == 'admin') {
                return $next($request);
            }
            
            Auth::logout();
            return redirect()->route('login');
    }
}
