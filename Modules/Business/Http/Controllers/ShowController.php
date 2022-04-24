<?php

namespace Modules\Business\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Business\Models\Business;

class ShowController extends Controller
{
    /**
     * Show the specified resource.
     *
     * @param Business $business
     * @return Response|Business
     */
    public function __invoke(Business $business): Response|Business
    {
        return $business;
    }
}
