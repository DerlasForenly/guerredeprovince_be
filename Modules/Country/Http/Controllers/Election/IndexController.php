<?php

namespace Modules\Country\Http\Controllers\Election;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Modules\Country\Http\Filters\ElectionFilter;
use Modules\Country\Http\Resources\ElectionResource;
use Modules\Country\Models\Country;
use Modules\Country\Models\Election;
use Modules\Status\Models\Status;

class IndexController extends Controller
{
    public function __invoke(ElectionFilter $filter)
    {
        $election = Election::filter($filter)->first();

        if ($election) {
            return new ElectionResource($election);
        }

        return response(null, 200)->header('Content-Type', 'application/json');;
    }
}