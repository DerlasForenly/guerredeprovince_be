<?php

namespace Modules\Request\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Army\Models\Army;
use Modules\Country\Models\Country;
use Modules\Party\Models\PoliticalParty;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Request\Models\Request as RequestModel;
use Modules\Request\Models\RequestType;
use function auth;
use function response;

class RequestController extends Controller
{
    public function __construct() {
        $this->middleware('jwt.verify');
    }

    public function partyIndex(): JsonResponse
    {
        $user = auth()->userOrFail();

        if ($user->party === null) {
            return response()->json([
                'message' => 'You do not have any political party',
            ], 404);
        }

        $requests = $user->requests->where('request_type_id', 1);

        return $requests;
    }

    public function joinParty(PoliticalParty $party): JsonResponse
    {
        $user = auth()->userOrFail();
        $request_type_id = RequestType::where('name', '=', 'Join party')->first()->id;

        $request = $user->requests->where('request_type_id', $request_type_id)
            ->where('political_party_id', '=', $party->id)->first();
        if ($request) {
            return response()->json([
                'message' => 'You sent request already',
            ], 418);
        }

        $request = RequestModel::create([
            'sender_id' => $user->id,
            'political_party_id' => $party->id,
            'request_type_id' => $request_type_id,
        ]);

        return response()->json([
            'message' => 'You send request to join party',
            'request' => $request,
        ], 201);
    }

    public function acceptParty(PoliticalParty $party, RequestModel $request): JsonResponse
    {
        $user = auth()->userOrFail();

        if ($user->id !== $party->leader_id) {
            return response()->json([
                'message' => 'Permission denied',
            ], 403);
        }

        $staff = PoliticalPartyStaff::create([
            'user_id' => $request->sender_id,
            'political_party_id' => $party->id,
            'position_id' => 5,
        ]);

        $request->delete();

        return response()->json([
            'message' => 'You accepted the request',
            'staff' => $staff,
        ], 201);
    }

    public function joinArmy(Country $country): JsonResponse
    {
        $user = auth()->userOrFail();

        if ($user->citizenship['id'] !== $country->id) {
            return response()->json([
                'message' => 'Only citizens can join army.',
            ], 403);
        }

        $request = $user->requests->where('request_type_id', RequestType::where('name', '=', 'Join army')->first()->id)
            ->where('country_id', $country->id)->first();

        if ($request) {
            return response()->json([
                'message' => 'You sent request already',
            ], 418);
        }

        $request = RequestModel::create([
           'sender_id' => $user->id,
           'country_id' => $country->id,
           'request_type_id' => RequestType::where('name', '=', 'Join army')->first()->id,
        ]);

        return response()->json([
            'message' => 'You send request to join army',
            'request' => $request,
        ], 201);
    }

    public function acceptArmy(Country $country, RequestModel $request): JsonResponse
    {
        $user = auth()->userOrFail();

        if ($user->id !== $country->leader->user_id) {
            return response()->json([
                'message' => 'Permission denied',
            ], 403);
        }

        $soldat = Army::create([
            'user_id' => $request->sender_id,
            'country_id' => $country->id,
        ]);

        $request->delete();

        return response()->json([
            'message' => 'You are a warrior now',
            'army' => $soldat,
        ], 201);
    }
}