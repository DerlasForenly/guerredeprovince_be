<?php

namespace Modules\Party\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Party\Models\PoliticalParty;

class ShowController extends Controller
{
    /**
     * Show the specified resource.
     * @param PoliticalParty $party
     * @return PoliticalParty
     */
    public function __invoke(PoliticalParty $party): PoliticalParty
    {
        return $party;
    }
}
