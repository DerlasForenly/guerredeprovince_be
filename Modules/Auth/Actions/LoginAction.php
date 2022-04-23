<?php

namespace Modules\Auth\Actions;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Modules\Auth\Actions\Traits\CreateNewToken;
use Symfony\Component\HttpFoundation\Response;

class LoginAction
{
    use CreateNewToken;

    /**
     * @param array $credentials
     * @return JsonResponse
     */
    public function handle(array $credentials): JsonResponse
    {
        if (!$token = Auth::attempt($credentials)) {
            return response()->json([
                'error' => trans('auth::errors.unauthorized')
            ], Response::HTTP_UNAUTHORIZED);
        }

        return $this->createNewToken($token);
    }
}
