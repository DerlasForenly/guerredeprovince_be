<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\Employee;
use App\Models\GamePrice;
use Illuminate\Http\Request;
use function auth;
use function response;

class BusinessController extends Controller
{
    public function show(Business $business): Business
    {

        return $business;
    }

    public function store(Request $request)
    {
        $user = auth()->userOrFail();
        $price_resources = GamePrice::where('name', 'Create factory')->first()->resources;

        if ($user->isEnough($price_resources)) {
            $user->deduct($price_resources);

            $factory = Business::create([
                'name' => $request['name'],
                'description' => $request['description'],
                'user_id' => $user->id,
                'region_id' => $request['region_id'],
                'resource_id' => $request['resource_id'],
            ]);

            return response()->json([
                'message' => 'OK',
                'factory' => $factory
            ], 201);
        }

        return response()->json([
            'message' => 'Not enough resources',
        ], 418);
    }

    public function getJob(Request $request, Business $business): \Illuminate\Http\JsonResponse
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

    public function dropJob()
    {
        $user = auth()->userOrFail();

        if (!$user->employed) {
            return response()->json([
                'message' => 'You do not have any job',
            ], 418);;
        }

        $user->employed->delete();

        return response()->json([
            'message' => 'OK',
        ], 200);;
    }
}
