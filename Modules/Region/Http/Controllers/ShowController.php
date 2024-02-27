<?php

namespace Modules\Region\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Region\Http\Resources\RegionResource;
use Modules\Region\Models\Region;

/**
 *
 */
class ShowController extends Controller
{
    public function __invoke(Region $region): RegionResource
    {
        return new RegionResource($region);
    }
}