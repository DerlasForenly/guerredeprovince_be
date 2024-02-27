<?php

namespace Modules\Party\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Party\Actions\LeavePartyAction;

class LeavePartyController extends Controller
{
    public function __invoke(
        LeavePartyAction $action
    ): JsonResponse {
        return $action->handle();
    }
}
