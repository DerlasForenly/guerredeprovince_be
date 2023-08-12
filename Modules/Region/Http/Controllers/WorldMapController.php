<?php

namespace Modules\Region\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Modules\Region\Http\Resources\WorldMapRegionResource;
use Modules\Region\Models\Region;

class WorldMapController extends Controller
{
    public function __invoke(): AnonymousResourceCollection
    {
        $regions = Region::with('country')->get();

        return WorldMapRegionResource::collection($regions);
    }
}
