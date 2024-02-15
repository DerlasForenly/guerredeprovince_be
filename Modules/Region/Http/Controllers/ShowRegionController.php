<?php

namespace Modules\Region\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Region\Models\Region;

class ShowRegionController extends Controller
{
    public function __invoke(Region $region): Region
    {
        return $region;
    }
}