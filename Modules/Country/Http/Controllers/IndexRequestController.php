<?php

namespace Modules\Country\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Routing\Controller;
use Modules\Country\Models\Country;

class IndexRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Country $country
     * @return Collection
     */
    public function __invoke(Country $country): Collection
    {
        return $country->requests()->get();
    }
}
