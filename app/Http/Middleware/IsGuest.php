<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;

class IsGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guard('admin')->check()){
            return redirect('/dashboard');
        }else if(Auth::guard('web')->check()){
            return redirect('/home/user=' . Session::get('id'));
        }
        return $next($request);
    }
}
