<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CustomAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check() && !$this->isExceptionRoute($request)) {
            return redirect('/login');
        }

        return $next($request);
    }

    protected function isExceptionRoute($request)
    {
        $exceptionRoutes = ['login', 'register'];
        return in_array($request->route()->getName(), $exceptionRoutes);
    }
}
