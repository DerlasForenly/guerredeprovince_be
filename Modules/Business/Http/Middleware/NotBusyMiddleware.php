<?php

namespace Modules\Business\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NotBusyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->userOrFail();

        if ($user->action) {
            return response()->json([
                'error' => 'You are busy right now',
            ], 404);
        }

        return $next($request);
    }
}
