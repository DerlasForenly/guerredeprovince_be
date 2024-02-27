<?php

namespace Modules\Country\Http\Controllers\Law;

use App\Http\Controllers\Controller;
use Modules\Country\Http\Requests\Law\VoteRequest;
use Modules\Country\Models\Law;
use Modules\Country\Models\LawVote;
use Modules\User\Models\User;

class VoteController extends Controller
{
    public function __invoke(VoteRequest $request, Law $law): \Illuminate\Http\JsonResponse
    {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();

        $vote = LawVote::create([
            'user_id' => $user->id,
            'value' => $request->value,
            'law_id' => $law->id

        ]);

        return response()->json([
            'message' => 'OK',
            'vote' => $vote
        ], 201);
    }
}