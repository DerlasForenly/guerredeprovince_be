<?php

namespace Modules\Business\Actions;

use Illuminate\Http\JsonResponse;

class DropJobAction
{
    public function handle(): JsonResponse
    {
        $user = auth()->userOrFail();

        $user->employee->delete();

        return response()->json([
            'message' => 'OK',
        ]);
    }
}
