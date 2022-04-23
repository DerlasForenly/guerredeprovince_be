<?php

namespace Modules\Government\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\Government\Models\Government;

class GovernmentController extends Controller
{
    public function show(Government $government): Government
    {
        return $government;
    }
}
