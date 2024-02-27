<?php

namespace Modules\Country\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Country\Models\Country;

class StoreRequestController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function __invoke(
        StoreRequestAction $action,
        Country $country
    ): JsonResponse {
        return $action->handler($country);
    }
}
