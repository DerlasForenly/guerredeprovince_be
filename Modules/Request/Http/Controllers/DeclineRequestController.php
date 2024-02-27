<?php

namespace Modules\Request\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Modules\Request\Models\Request as RequestModel;
use Modules\Status\Models\Status;

class DeclineRequestController
{
    public function __invoke(RequestModel $requestModel): JsonResponse
    {
        $requestModel->status_id = Status::DECLINED_ID;
        $requestModel->save();

        return response()->json([
            'message' => 'Join party request has been declined!',
            'request' => $requestModel,
        ]);
    }
}
