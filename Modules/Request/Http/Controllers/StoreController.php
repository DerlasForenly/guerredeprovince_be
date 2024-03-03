<?php

namespace Modules\Request\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Party\Models\PoliticalParty;
use Modules\Request\Http\Requests\StoreRequest;
use Modules\Request\Models\Request;
use Modules\Request\Models\RequestType;
use Modules\Status\Models\Status;
use Modules\User\Models\User;

class StoreController extends Controller
{
    const MAP_TYPE_AND_MODEL = [
        RequestType::JOIN_PARTY_ID => PoliticalParty::class,
    ];

    /**
     * Store a newly created resource in storage.
     */
    public function __invoke(StoreRequest $request): JsonResponse
    {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();

        $request = Request::create([
            'user_id'          => $user->id,
            'requestable_type' => self::MAP_TYPE_AND_MODEL[$request->type_id],
            'requestable_id'   => $request->requestable_id,
            'type_id'          => $request->type_id,
            'status_id'        => Status::IN_PROCESS_ID,
        ]);

        return response()->json([
            'message' => 'OK',
            'request' => $request,
        ], 201);
    }
}
