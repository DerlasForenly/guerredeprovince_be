<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\User\Http\Resources\UserResource;
use Modules\User\Models\User;
use Illuminate\Http\JsonResponse;

class ShowController extends Controller
{
    /**
     * Show the specified resource.
     *
     * @param User $user
     * @return \Modules\User\Http\Resources\UserResource
     */
    public function __invoke(User $user): UserResource
    {
        return new UserResource($user);
    }
}
