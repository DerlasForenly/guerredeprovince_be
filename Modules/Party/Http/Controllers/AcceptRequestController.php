<?php

namespace Modules\Party\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Party\Actions\AcceptRequestAction;
use Modules\Party\Models\PoliticalParty;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Position\Models\Position;
use Modules\Request\Models\Request;

class AcceptRequestController extends Controller
{
    /**
     * @param AcceptRequestAction $action
     * @param PoliticalParty $party
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(
        AcceptRequestAction $action,
        PoliticalParty $party,
        Request $request
    ): JsonResponse {
        return $action->handler($party, $request);
    }
}
