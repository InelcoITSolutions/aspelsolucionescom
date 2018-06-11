<?php

namespace aspelsoluciones\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class DeniedIfNotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'admin')
    {
        if (Auth::guard($guard)->check()) {
            abort(403);
        }
        return $next($request);
    }
}
