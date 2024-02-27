<?php

namespace Modules\Auth\Actions;

use Illuminate\Http\JsonResponse;

class LogoutAction
{
    /**
     * @return JsonResponse
     */
    public function handle(): JsonResponse
    {
        auth()->logout();

        return response()->json(['message' => 'User successfully signed out']);
    }
}
