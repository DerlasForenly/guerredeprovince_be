<?php

namespace Modules\Party\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\GamePrice\Models\GamePrice;
use Modules\Party\Models\PoliticalParty;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Position\Models\PositionType;
use Modules\Request\Models\Request as RequestModel;
use Modules\Request\Models\RequestType;
use function auth;
use function response;

class PartyController extends Controller
{
    public function __construct() {
        $this->middleware('jwt.verify');
    }

    public function show(PoliticalParty $party): PoliticalParty
    {
        return $party;
    }

    public function store(Request $request)
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

    public function staff(PoliticalParty $party)
    {
        return $party->political_party_staff;
    }

    public function sendJoinRequest(PoliticalParty $party)
    {
        $user = auth()->userOrFail();

        if ($user->party !== null) {
            return response()->json([
                'message' => 'You have political party already',
                'party' => $user->party
            ], 418);
        }

        $staff = $party->political_party_staff->where('position_id', 1)->first();

        $request = RequestModel::where('sender_id', $user->id)
            ->where('getter_id', $staff->user_id)
            ->where('request_type_id', RequestType::where('name', 'Join party')->first()->id)->first();

        if ($request) {
            return response()->json([
                'message' => 'You send request already',
                'request' => $request,
            ], 418);
        }

        $request = RequestModel::create([
            'sender_id' => $user->id,
            'getter_id' => $staff->user_id,
            'request_type_id' => RequestType::where('name', 'Join party')->first()->id,
        ]);

        return response()->json([
            'message' => 'OK',
            'request' => $request,
        ], 201);
    }

    public function getRequests(PoliticalParty $party)
    {
        $staff = $party->political_party_staff->where('position_id', 1)->first();

        return RequestModel::where('getter_id', $staff->user_id)
            ->where('request_type_id', RequestType::where('name', 'Join party')->first()->id);
    }
}
