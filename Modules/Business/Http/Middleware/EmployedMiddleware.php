<?php

namespace Modules\Business\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EmployedMiddleware
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

        if ($user->job === null) {
            return response()->json([
                'error' => 'You dont have job any',
            ], 404);
        }

        return $next($request);
    }
}
