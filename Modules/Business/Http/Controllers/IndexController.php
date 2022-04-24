<?php

namespace Modules\Business\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Business\Models\Business;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __invoke(): Response
    {
        return Business::all();
    }
}
