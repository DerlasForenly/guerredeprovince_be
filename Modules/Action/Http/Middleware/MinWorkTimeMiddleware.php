<?php

namespace Modules\Business\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class MinWorkTimeMiddleware
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

        $diff = Carbon::now()->diffInMinutes($user->action->created_at);

        if ($diff < Config::get('constants.min_work_time')) {
            return response()->json([
                'message' => "You worked for $diff minutes and are not able to stop right now.",
            ], 418);
        }

        return $next($request);
    }
}
