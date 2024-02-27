<?php

namespace Modules\Request\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function __invoke(): Collection
    {
        return \Modules\Request\Models\Request::all();
    }
}
