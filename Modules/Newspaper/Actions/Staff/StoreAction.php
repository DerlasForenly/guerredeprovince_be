<?php

namespace Modules\Newspaper\Actions\Staff;

use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Models\Newspaper;
use Modules\Newspaper\Models\NewspaperStaff;

/**
 * Class StoreAction
 */
class StoreAction
{
    /**
     * @param \Modules\Newspaper\Models\Newspaper $newspaper
     * @param \Modules\Newspaper\Models\NewspaperStaff $staff
     * @param array $params
     * @return \Illuminate\Http\JsonResponse
     */
    public function handle(Newspaper $newspaper, NewspaperStaff $staff, array $params): JsonResponse
    {



        return response()->json([
            'message' => 'OK',

        ], 201);
    }
}
