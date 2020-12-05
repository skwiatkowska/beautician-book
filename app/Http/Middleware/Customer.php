<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class Customer
{
    public function handle($request, Closure $next) {
        //Auth::logout();
        if (!Auth::guard('web')->check()) {
            return redirect('/logowanie')->withErrors('Wymagane logowanie');
        }

        return $next($request);
    }
}
