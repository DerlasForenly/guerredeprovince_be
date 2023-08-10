<?php

namespace Modules\Business\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Routing\Controller;
use Modules\Business\Http\Resources\BusinessResource;
use Modules\Business\Models\Business;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function __invoke(): AnonymousResourceCollection
    {
        return BusinessResource::collection(Business::all());
    }
}
