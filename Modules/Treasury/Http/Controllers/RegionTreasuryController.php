<?php

namespace Modules\Treasury\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Region\Models\Region;

class RegionTreasuryController extends Controller
{
    public function __invoke(Region $region)
    {
        return $region->treasuries()->get();
    }
}
