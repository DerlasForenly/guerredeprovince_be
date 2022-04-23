<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Auth\Actions\LoginAction;
use Modules\Auth\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    /**
     * Get a JWT via given credentials.
     *
     * @param LoginRequest $request
     * @param LoginAction $action
     * @return JsonResponse
     */
    public function __invoke(
        LoginRequest $request,
        LoginAction $action
    ): JsonResponse
    {
        return $action->handle($request->only(['email', 'password']));
    }
}
