<?php

namespace Modules\Newspaper\Http\Controllers\Newspaper;

use App\Http\Controllers\Controller;
use Modules\Newspaper\Http\Resources\Newspaper\NewspaperResource;
use Modules\Newspaper\Models\Newspaper;

/**
 * Class ShowController
 */
class ShowController extends Controller
{
    /**
     * @param \Modules\Newspaper\Models\Newspaper $newspaper
     * @return \Modules\Newspaper\Http\Resources\Newspaper\NewspaperResource
     */
    public function __invoke(Newspaper $newspaper): NewspaperResource
    {
        return new NewspaperResource($newspaper);
    }
}
