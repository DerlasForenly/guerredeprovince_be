<?php

namespace Modules\Request\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Party\Models\PoliticalParty;
use Modules\Request\Models\Request;
use Modules\Request\Models\RequestType;
use Modules\Status\Models\Status;
use Modules\User\Models\User;

class StoreController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function __invoke(PoliticalParty $party): JsonResponse
    {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();

        $request = Request::create([
            'user_id'          => $user->id,
            'requestable_type' => PoliticalParty::class,
            'requestable_id'   => $party->id,
            'request_type_id'  => RequestType::JOIN_PARTY_ID,
            'status_id'        => Status::IN_PROCESS_ID,
        ]);

        return response()->json([
            'message' => 'OK',
            'request' => $request,
        ], 201);
    }
}
