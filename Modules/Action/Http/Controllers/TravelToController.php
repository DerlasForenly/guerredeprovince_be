<?php

namespace Modules\Action\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Action\Http\Resources\MoveActionResource;
use Modules\Action\Jobs\MoveUserActionJob;
use Modules\Action\Models\MoveAction;
use Modules\Region\Models\Region;
use Modules\Status\Models\Status;
use Modules\User\Models\User;

class TravelToController extends Controller
{
    /**
     * @param Region $region
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Region $region): JsonResponse
    {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();

        $time = 15;

        $action = MoveAction::create([
            'start_region_id' => $user->current_region_id,
            'end_region_id'   => $region->id,
            'status_id'       => Status::IN_PROCESS_ID,
            'user_id'         => $user->id,
            'time'            => $time,
            'price'           => 0,
        ]);

        MoveUserActionJob::dispatch($user->id, $action)
            ->delay(now()->addSeconds($time));

        return response()->json([
            'message' => 'OK',
            'action' => new MoveActionResource($action),
        ], 201);
    }
}
