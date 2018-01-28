<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class AdminRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = Null)
    {
        if($request->ajax() || $request->wantsJson()){
            return response('Unauthorized.', 401);
        }
        else {
            if (Auth::guard($guard)->check())
            {
                return redirect('/dashboard');
            }


            return $next($request);
        }
        }
}
