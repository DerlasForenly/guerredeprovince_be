<?php

namespace Modules\Party\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Party\Http\Resources\ShortPartyResource;
use Modules\Party\Models\PoliticalParty;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function __invoke(): AnonymousResourceCollection
    {
        return ShortPartyResource::collection(PoliticalParty::all());
    }
}
