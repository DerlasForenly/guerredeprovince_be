<?php

namespace Modules\Request\Actions;

use Illuminate\Http\JsonResponse;
use Modules\Request\Models\Request;

class StoreAction
{
    /**
     * @param $request
     * @return JsonResponse
     */
    public function handle($request): JsonResponse
    {
        $request = Request::create($request->toArray());

        return response()->json([
            'message' => 'OK',
            'request' => $request,
        ], 201);
    }
}
