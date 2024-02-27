<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Auth\Actions\LogoutAction;

class LogoutController extends Controller
{
    /**
     * Log the user out (Invalidate the token).
     *
     * @param LogoutAction $action
     * @return JsonResponse
     */
    public function __invoke(
        LogoutAction $action
    ): JsonResponse
    {
        return $action->handle();
    }
}
