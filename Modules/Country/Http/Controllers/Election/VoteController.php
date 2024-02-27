<?php

namespace Modules\Country\Http\Controllers\Election;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Country\Models\ElectionVote;

class VoteController extends Controller
{
    public function __invoke(Request $request): \Illuminate\Http\JsonResponse
    {
        $user = auth()->userOrFail();

        $vote = ElectionVote::create([
            'user_id'      => $user->id,
            'candidate_id' => $request->candidate_id,
        ]);

        return response()->json([
            'message' => 'OK',
            'vote' => $vote,
        ], 201);
    }
}