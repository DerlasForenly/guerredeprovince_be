<?php

namespace Modules\Business\Actions;

use Illuminate\Http\JsonResponse;
use Modules\Business\Models\Business;
use Modules\GamePrice\Models\GamePrice;

class StoreAction
{
    public function handler(array $request): JsonResponse
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
}
