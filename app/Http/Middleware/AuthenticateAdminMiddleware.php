<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if(Auth::check()){
            foreach($roles as $role){
                if(config('const.role')[Auth::user()->role_type] == $role){
                    return $next($request);
                }
            }
        }
        Auth::guard()->logout();
        return redirect()->route("login.show");
    }
}
