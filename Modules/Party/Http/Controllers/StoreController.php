<?php

namespace Modules\Party\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Party\Http\Requests\StoreRequest;
use Modules\Party\Models\PoliticalParty;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Position\Models\Position;
use Modules\User\Models\User;

class StoreController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAction $action
     * @param StoreRequest $request
     * @return JsonResponse
     */
    public function __invoke(
        StoreRequest $request
    ): JsonResponse {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();

        /**
         * @TODO Check rules how user and where can create own party
         */
        $party = PoliticalParty::create(
            array_merge(
                $request->toArray(),
                [
                    'country_id' => $user->currentRegion->country_id
                ]
            )
        );

        $partyStaff = PoliticalPartyStaff::create([
            'user_id'            => $user->id,
            'political_party_id' => $party->id,
            'position_id'        => Position::POLITICAL_PARTY_LEADER_ID,
        ]);

        return response()->json([
            'message' => 'Party has been created',
            'party'   => $party,
            'staff'   => $partyStaff,
        ], 201);
    }
}
