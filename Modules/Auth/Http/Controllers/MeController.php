<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Auth\Http\Resources\MeResource;

class MeController extends Controller
{
    /**
     * Get the authenticated User.
     */
    public function __invoke(): JsonResponse
    {
        $response = response()->json(new MeResource(auth()->user()), 200);

        $response->header('Content-Type', 'application/json');

        return $response;
    }
}
