<?php

namespace Modules\Party\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Party\Actions\StoreRequestAction;
use Modules\Party\Models\PoliticalParty;

class StoreRequestController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function __invoke(
        StoreRequestAction $action,
        PoliticalParty $party
    ): JsonResponse {
        return $action->handler($party);
    }
}
