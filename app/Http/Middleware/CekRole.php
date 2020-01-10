<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$role)
    {

        if(in_array(Auth::user()->role, $role)){
            return $next($request);
        };
        return redirect()->route('login-ku');
        
        
    }
}
