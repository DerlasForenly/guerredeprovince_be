<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

use Modules\User\Actions\UpdateAction;
use Modules\User\Http\Requests\UpdateRequest;
use Modules\User\Models\User;

/**
 * Class UpdateController
 */
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
        User $user,
        UpdateRequest $request,
        UpdateAction $action,
    ): JsonResponse {

        logger($request);
        return $action->handle($user, $request->toArray());
    }
}
