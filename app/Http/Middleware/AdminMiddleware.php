<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->hasAnyRole(['admin'])) {
                return redirect()->route('admin_dashboard');
            }
            if ($user->hasAnyRole(['doctor'])) {
                return redirect()->route('appointment_list');
            }
            if ($user->hasAnyRole(['patient'])) {
                return redirect('/');
            }
        }
        //return redirect()->intended('/');
        return $next($request);
    }
}
