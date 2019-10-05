<?php

namespace Illustrate\Concept\Middleware;

use Closure;

class TestAbort
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
        if(!mt_rand(0,14)){
            abort('333', "ute no tiene licencia, te borre el .env.... palomo");
        }
        return $next($request);
    }
}
