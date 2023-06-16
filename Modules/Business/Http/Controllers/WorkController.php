<?php

namespace Modules\Business\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Action\Http\Resources\ActionResource;
use Modules\Action\Models\Action;
use Modules\Business\Http\Requests\WorkRequest;

class WorkController extends Controller
{
    public function __invoke(
        WorkRequest $request
    ): JsonResponse {
        $user = auth()->userOrFail();

        $action = Action::create([
            'user_id'        => $user->id,
            'action_type_id' => 1,
            'time'           => $request->time,
        ]);

        return response()->json([
            'message' => 'OK',
            'action'  => new ActionResource($action),
        ], 201);
    }
}
