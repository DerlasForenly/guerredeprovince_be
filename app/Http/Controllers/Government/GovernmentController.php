<?php

namespace App\Http\Controllers\Government;

use App\Http\Controllers\Controller;
use App\Models\Government;

class GovernmentController extends Controller
{
    public function show(Government $government): Government
    {
        return $government;
    }
}
