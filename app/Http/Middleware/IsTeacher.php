<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsTeacher
{

    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() && Auth::user()->isTeacher()) {
            return $next($request);
        }
        return redirect('/');
    }
}
