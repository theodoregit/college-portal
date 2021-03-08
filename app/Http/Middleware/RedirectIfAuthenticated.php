<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect('/admin');
                }
                break;   
            case 'student':
                if (Auth::guard($guard)->check()) {
                    return redirect('/portals/student/index');
                }
                break;
            case 'registrar':
                if (Auth::guard($guard)->check()) {
                    return redirect('/portals/registrar/index');
                }
                break;
            case 'instructor':
                if (Auth::guard($guard)->check()) {
                    return redirect('/portals/instructor/index');
                }
                break;            
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }
                break;
        }
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }

        return $next($request);
    }
}
