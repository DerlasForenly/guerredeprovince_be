<?php

namespace Modules\Business\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Business\Models\Business;
use Modules\Business\Models\Employee;
use Modules\GamePrice\Models\GamePrice;

class BusinessController extends Controller
{
    public function getJob(Request $request, Business $business): JsonResponse
    {
        $user = auth()->userOrFail();

        if ($user->job != null) {
            return response()->json([
                'message' => 'You have a job already',
                'job' => $user->job
            ], 418);
        }

        $employee = Employee::create([
            'user_id' => $user->id,
            'business_id' => $business->id,
        ]);

        return response()->json([
            'message' => 'OK',
            'employee' => $employee
        ], 201);
    }

    public function dropJob(): JsonResponse
    {
        $user = auth()->userOrFail();

        if (!$user->employed) {
            return response()->json([
                'message' => 'You do not have any job',
            ], 418);
        }

        $user->employed->delete();

        return response()->json([
            'message' => 'OK',
        ], 200);
    }
}