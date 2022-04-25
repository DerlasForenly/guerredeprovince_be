<?php

namespace Modules\Business\Actions;

use Illuminate\Http\JsonResponse;
use Modules\Action\Models\Action;

class WorkAction
{
    /**
     * @param $request
     * @return JsonResponse
     */
    public function handle($request): JsonResponse
    {
        $user = auth()->userOrFail();

        $action = Action::create([
            'user_id' => $user->id,
            'action_type_id' => 1,
            'time' => $request->time,
        ]);

        return response()->json([
            'message' => 'OK',
            'action' => $action
        ], 201);
    }
}
