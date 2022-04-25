<?php

namespace Modules\Business\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Modules\Action\Models\ActionType;

class BusyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $user = auth()->userOrFail();

        if (!$user->action) {
            return response()->json([
                'error' => 'You are not busy right now',
            ], 404);
        }

        if ($user->action->action_type_id !== ActionType::WORKING_ID) {
            return response()->json([
                'message' => 'You are busy on other action. Nothing to get',
            ], 418);
        }

        return $next($request);
    }
}
