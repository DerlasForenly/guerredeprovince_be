<?php

namespace Modules\Request\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Position\Models\Position;
use Modules\Request\Models\Request as RequestModel;
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
        $member = PoliticalPartyStaff::create([
            'user_id'            => $requestModel->user_id,
            'political_party_id' => $requestModel->requestable_id,
            'position_id'        => Position::POLITICAL_PARTY_MEMBER_ID,
        ]);

        $requestModel->status_id = Status::ACCEPTED_ID;
        $requestModel->save();

        return response()->json([
            'message' => 'OK',
            'member'  => $member,
        ], 201);
    }
}
