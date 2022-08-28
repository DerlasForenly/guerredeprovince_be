<?php

namespace Modules\Country\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Country\Actions\AcceptRequestAction;
use Modules\Country\Models\Country;
use Modules\Request\Models\Request;

class AcceptRequestController extends Controller
{
    /**
     * @param AcceptRequestAction $action
     * @param Country $country
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(
        AcceptRequestAction $action,
        Country $country,
        Request $request
    ): JsonResponse {
        return $action->handler($country, $request);
    }
}
