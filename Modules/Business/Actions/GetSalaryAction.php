<?php

namespace Modules\Business\Actions;

use Carbon\Carbon;
use Illuminate\Http\JsonResponse;

class GetSalaryAction
{
    public function handle(): JsonResponse
    {
        $user = auth()->userOrFail();

        $diff = Carbon::now()->diffInMinutes($user->action->created_at);
        $diff = min($diff, $user->action->time);

        $user->action->delete();

        return response()->json([
            'message' => "You worked for $diff minutes",
            'salary' => 5,
            'exp' => 6,
        ], 200);
    }
}
