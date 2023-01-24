<?php

namespace Modules\Auth\Actions;

use Illuminate\Http\JsonResponse;
use Modules\Resource\Models\Resource;
use Modules\Treasury\Models\UserTreasury;
use Modules\User\Models\User;
use Symfony\Component\HttpFoundation\Response;

class RegisterAction
{
    /**
     * @var \Modules\User\Models\User
     */
    private User $user;

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

        $this->user = $user;

        $this->initializeTreasury();

        return response()->json([
            'message' => 'User successfully registered',
        ], Response::HTTP_CREATED);
    }

    private function initializeTreasury(): void
    {
        $resources = Resource::all();

        foreach ($resources as $resource) {
            UserTreasury::factory()
                ->user($this->user->id)
                ->resource($resource->id)
                ->create();
        }
    }
}
