<?php

namespace Modules\Party\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Party\Models\PoliticalParty;
use Modules\Request\Models\Request;

class ShowRequestController extends Controller
{
    /**
     * Show the specified resource.
     */
    public function __invoke(PoliticalParty $party, Request $request)
    {
        return $request;
    }
}
