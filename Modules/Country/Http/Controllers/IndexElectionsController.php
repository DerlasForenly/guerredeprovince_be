<?php

namespace Modules\Country\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Modules\Country\Models\Country;
use Modules\Status\Models\Status;

class IndexElectionsController extends Controller
{
    public function __invoke(Country $country): Collection
    {
        return $country->elections()->where('status_id', Status::IN_PROCESS_ID)->get();
    }
}