<?php

namespace Modules\Newspaper\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Actions\Staff\StoreAction;
use Modules\Newspaper\Http\Requests\Staff\StoreRequest;
use Modules\Newspaper\Models\Newspaper;
use Modules\Newspaper\Models\NewspaperStaff;

/**
 * Class StoreController
 */
class StoreController extends Controller
{
    /**
     * @param \Modules\Newspaper\Models\Newspaper $newspaper
     * @param \Modules\Newspaper\Models\NewspaperStaff $staff
     * @param \Modules\Newspaper\Actions\Staff\StoreAction $action
     * @param \Modules\Newspaper\Http\Requests\Staff\StoreRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(
        Newspaper $newspaper,
        NewspaperStaff $staff,
        StoreAction $action,
        StoreRequest $request,
    ): JsonResponse {
        return $action->handle($newspaper, $staff, $request->toArray());
    }
}
