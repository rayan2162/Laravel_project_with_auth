<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckApproved
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->is_approved == 0) {
            Auth::logout();
            return redirect('/login')->withErrors(['Your account is not approved yet.']);
        }

        return $next($request);
    }
}
