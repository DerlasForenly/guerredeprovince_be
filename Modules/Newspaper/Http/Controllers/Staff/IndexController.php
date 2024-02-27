<?php

namespace Modules\Newspaper\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Modules\Newspaper\Http\Resources\StaffResource;
use Modules\Newspaper\Models\Newspaper;
use Modules\Newspaper\Models\NewspaperStaff;

/**
 * Class IndexController
 */
class IndexController extends Controller
{
    public function __invoke(Newspaper $newspaper)
    {
        return StaffResource::collection($newspaper->staff);
    }
}
