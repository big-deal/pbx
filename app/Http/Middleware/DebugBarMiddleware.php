<?php

namespace App\Http\Middleware;

use Closure;
use Debugbar;
use Illuminate\Support\Facades\Gate;

class DebugBarMiddleware
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
        if (Gate::denies('debugbar')) {
            Debugbar::disable();
        }

        return $next($request);
    }
}
