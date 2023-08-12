<?php

namespace Modules\Action\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Modules\Action\Http\Requests\WorkRequest;
use Modules\Action\Jobs\WorkActionJob;
use Modules\Action\Models\WorkAction;
use Modules\Status\Models\Status;
use Modules\User\Models\User;

class WorkController extends Controller
{
    public function __invoke(
        WorkRequest $request
    ): JsonResponse {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();

        /**
         * @TODO Update job attribute for user and create personal salary functional
         */
        $action = WorkAction::create([
            'user_id'        => $user->id,
            'time'           => $request->time,
            'business_id'    => $user->employee->business->id,
            'salary'         => $user->employee->business->salary,
            'salary_type_id' => $user->employee->business->salary_type_id,
            'status_id'      => Status::IN_PROCESS_ID,
        ]);

        WorkActionJob::dispatch($user->id, $action)
            ->delay(now()->addMinutes($request->time));

        return response()->json([
            'message' => 'OK',
            'action'  => $action,
        ], 201);
    }
}
