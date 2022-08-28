<?php

namespace Modules\Country\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Routing\Controller;
use Modules\Country\Models\Country;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection
     */
    public function __invoke(): Collection
    {
        return Country::all();
    }
}
