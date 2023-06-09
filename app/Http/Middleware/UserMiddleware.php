<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class RoleMiddleware extends Middleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->user()->hasRole('admin')) {
            return $next($request);
        } else {
            return redirect('/');
        }
    }
}