<?php

namespace Modules\Auth\Actions\Traits;

use Illuminate\Http\JsonResponse;

trait CreateNewToken
{
    /**
     * Get the token array structure.
     *
     * @param string $token
     * @return JsonResponse
     */
    protected function createNewToken(string $token): JsonResponse
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
        ]);
    }
}
