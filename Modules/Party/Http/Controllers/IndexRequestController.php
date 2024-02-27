<?php

namespace Modules\Party\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Party\Http\Resources\RequestResource;
use Modules\Party\Models\PoliticalParty;
use Modules\Status\Models\Status;

class IndexRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __invoke(PoliticalParty $party): AnonymousResourceCollection
    {
        return RequestResource::collection(
            $party->requests()->where('status_id', '=', Status::IN_PROCESS_ID)->get()
        );
    }
}
