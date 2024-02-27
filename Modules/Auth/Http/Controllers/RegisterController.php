<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Auth\Actions\RegisterAction;
use Modules\Auth\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Register a User.
     *
     * @param RegisterRequest $request
     * @param RegisterAction $action
     * @return JsonResponse
     */
    public function __invoke(
        RegisterRequest $request,
        RegisterAction $action
    ): JsonResponse
    {
        return $action->handle($request->only([
            'email',
            'password',
            'nickname',
        ]));
    }
}
