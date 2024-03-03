<?php

namespace Modules\Request\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Position\Models\Position;
use Modules\Request\Models\Request as RequestModel;
use Modules\Request\Services\RequestAcceptExecutor;
use Modules\Status\Models\Status;

/**
 *
 */
class AcceptRequestController extends Controller
{
    /**
     * @param \Modules\Request\Models\Request $requestModel
     * @return JsonResponse
     */
    public function __invoke(
        RequestModel $requestModel
    ): JsonResponse {
        $requestAcceptExecutor = new RequestAcceptExecutor($requestModel);
        $requestAcceptExecutor->execute();

        return response()->json([
            'message' => 'OK'
        ], 201);
    }
}
