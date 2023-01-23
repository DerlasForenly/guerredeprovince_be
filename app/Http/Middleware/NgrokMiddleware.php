<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NgrokMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $request->headers->set('ngrok-skip-browser-warning', '1');

        return $next($request);
    }
}
