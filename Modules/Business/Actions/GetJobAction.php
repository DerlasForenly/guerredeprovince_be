<?php

namespace Modules\Business\Actions;

use Illuminate\Http\JsonResponse;
use Modules\Business\Models\Employee;

class GetJobAction
{
    public function handler($business): JsonResponse
    {
        $user = auth()->userOrFail();

        $employee = Employee::create([
            'user_id' => $user->id,
            'business_id' => $business->id,
        ]);

        return response()->json([
            'message' => 'OK',
            'employee' => $employee
        ], 201);
    }
}
