<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Auth\Http\Resources\MeResource;

class MeController extends Controller
{
    /**
     * Get the authenticated User.
     *
     * @return \Modules\Auth\Http\Resources\MeResource
     */
    public function __invoke(): MeResource
    {
        return new MeResource(auth()->user());
    }
}
