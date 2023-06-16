<?php

namespace Modules\Business\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Business\Http\Resources\BusinessResource;
use Modules\Business\Models\Business;

class ShowController extends Controller
{
    /**
     * Show the specified resource.
     *
     * @param Business $business
     * @return \Modules\Business\Http\Resources\BusinessResource
     */
    public function __invoke(Business $business): BusinessResource
    {
        return new BusinessResource($business);
    }
}
