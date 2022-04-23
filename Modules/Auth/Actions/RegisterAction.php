<?php

namespace Modules\Auth\Actions;

use Illuminate\Http\JsonResponse;
use Modules\User\Models\User;
use Symfony\Component\HttpFoundation\Response;

class RegisterAction
{
    /**
     * @param array $params
     * @return JsonResponse
     */
    public function handle(array $params): JsonResponse
    {
        $params['password'] = bcrypt($params['password']);

        $user = User::create($params);

        if (!$user) {
            return response()->json([
                'message' => 'User creating failed',
            ], Response::HTTP_NOT_FOUND);
        }

        return response()->json([
            'message' => 'User successfully registered',
        ], Response::HTTP_CREATED);
    }
}
