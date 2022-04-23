<?php

namespace Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class MeController extends Controller
{
    /**
     * Get the authenticated User.
     *
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        return response()->json(auth()->user());
    }
}
