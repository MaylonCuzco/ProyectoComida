<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
       
        if (auth()->user()->role ==  $role) {
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}