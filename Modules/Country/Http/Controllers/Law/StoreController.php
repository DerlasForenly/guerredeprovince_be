<?php

namespace Modules\Country\Http\Controllers\Law;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Country\Http\Requests\Law\StoreRequest;
use Modules\Country\Jobs\ExecuteLawProjectJob;
use Modules\Country\Models\Law;
use Modules\Status\Models\Status;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request): JsonResponse
    {
        /**
         * @var \Modules\User\Models\User $user
         */
        $user = auth()->userOrFail();

        $law = Law::create([
            'country_id'  => $user->politicalPartyStaff->politicalParty->country_id,
            'law_type_id' => $request->law_type_id,
            'status_id'   => Status::IN_PROCESS_ID,
            'meta'        => $request->meta,
        ]);

        ExecuteLawProjectJob::dispatch($law)
            ->delay(now()->addSeconds(3));

        return response()->json([
            'message' => 'OK',
            'law'     => $law,
        ]);
    }
}