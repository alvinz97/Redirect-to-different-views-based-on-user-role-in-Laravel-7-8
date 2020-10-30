<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $role = Auth::user()->role;

                switch ($role) {
                    case '0':
                        return redirect('/admin/dashboard');
                        break;
                    case '1':
                        return redirect('/seller/dashboard');
                        break;
                    case '2':
                        return redirect('/buyer/dashboard');
                        break;
                }
                return $next($request);
            }
        }

        // if (Auth::guard($guards)->check()) {
            
        // }
        
        return $next($request);
    }
}
