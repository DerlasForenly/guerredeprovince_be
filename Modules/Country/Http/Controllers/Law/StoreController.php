<?php

namespace Modules\Country\Http\Controllers\Law;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Country\Http\Requests\Law\StoreRequest;
use Modules\Country\Jobs\ExecuteLawProjectJob;
use Modules\Country\Models\GovernmentType;
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

        match (true) {
            $law->country->government_type_id === GovernmentType::DICTATORSHIP_ID,
            $law->country->government_type_id === GovernmentType::ABSOLUTE_MONARCHY_ID => ExecuteLawProjectJob::dispatch($law),
            default => ExecuteLawProjectJob::dispatch($law)
                ->delay(now()->addHours()),
        };

        return response()->json([
            'message' => 'OK',
            'law'     => $law,
        ]);
    }
}