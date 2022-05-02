<?php

namespace Modules\Party\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\GamePrice\Models\GamePrice;
use Modules\Party\Models\PoliticalParty;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Position\Models\PositionType;

class StoreController extends Controller
{
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     */
    public function __invoke(Request $request)
    {
        $user = auth()->userOrFail();

        if ($user->political_party->count()) {
            return response()->json([
                'message' => 'You are in political party already',
                'party' => $user->political_party
            ], 418);
        };

        $price_resources = GamePrice::where('name', 'Create political party')->first()->resources;

        if ($user->isEnough($price_resources)) {
            $user->deduct($price_resources);

            $party = PoliticalParty::create([
                'name' => $request['name'],
                'description' => $request['description'],
                'tag' => $request['tag'],
                'country_id' => $request['country_id'],
            ]);

            $party = PoliticalPartyStaff::create([
                'user_id' => $user->id,
                'political_party_id' => $party->id,
                'position_id' => PositionType::where('name', '=', 'leader')->first()->id,
            ]);

            return response()->json([
                'message' => 'OK',
                'party' => $party
            ], 201);
        }

        return response()->json([
            'message' => 'Not enough resources',
        ], 418);
    }
}
