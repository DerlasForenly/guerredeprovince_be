<?php

namespace Modules\Business\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Business\Http\Requests\StoreRequest;
use Modules\Business\Models\Business;
use Modules\User\Models\User;

class StoreController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRequest $request
     * @return JsonResponse
     */
    public function __invoke(
        StoreRequest $request
    ): JsonResponse {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();

        $business = Business::create([
            'name'        => $request['name'],
            'description' => $request['description'],
            'user_id'     => $user->id,
            'region_id'   => $user->current_region_id,
            'resource_id' => $request['resource_id'],
        ]);

        return response()->json([
            'message' => 'OK',
            'business' => $business,
        ], 201);
    }
}
