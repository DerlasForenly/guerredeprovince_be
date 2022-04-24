<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\User\Actions\UpdateAction;
use Modules\User\Http\Requests\UpdateRequest;
use Modules\User\Models\User;

class UpdateController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param UpdateAction $action
     * @param User $user
     * @return JsonResponse
     */
    public function __invoke(
        UpdateRequest $request,
        UpdateAction $action,
        User $user,
    ): JsonResponse {
        return response()->json([
            'message' => 'Not available now',
        ]);
    }
}
