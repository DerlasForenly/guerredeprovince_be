<?php

namespace Modules\Party\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Modules\Party\Http\Resources\StaffResource;
use Modules\Party\Models\PoliticalParty;

class IndexStaffController extends Controller
{
    public function __invoke(PoliticalParty $party): AnonymousResourceCollection
    {
        return StaffResource::collection($party->politicalPartyStaff);
    }
}