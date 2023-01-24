<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\User\Models\User;
use Illuminate\Http\JsonResponse;

class ShowController extends Controller
{
    /**
     * Show the specified resource.
     *
     * @param User $user
     * @return JsonResponse
     */
    public function __invoke(User $user): JsonResponse
    {
        return response()->json($user);
    }
}
