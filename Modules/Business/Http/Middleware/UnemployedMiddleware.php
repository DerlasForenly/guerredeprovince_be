<?php

namespace Modules\Business\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UnemployedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->userOrFail();

        if ($user->job != null) {
            return response()->json([
                'error' => 'You have job already',
            ], 404);
        }

        return $next($request);
    }
}
