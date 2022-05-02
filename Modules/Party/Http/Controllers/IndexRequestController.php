<?php

namespace Modules\Party\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Routing\Controller;
use Modules\Party\Models\PoliticalParty;

class IndexRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke(PoliticalParty $party): Collection
    {
        return $party->requests()->get();
    }
}
