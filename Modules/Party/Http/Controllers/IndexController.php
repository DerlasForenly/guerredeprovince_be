<?php

namespace Modules\Party\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Routing\Controller;
use Modules\Party\Models\PoliticalParty;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection
     */
    public function __invoke(): Collection
    {
        return PoliticalParty::all();
    }
}
