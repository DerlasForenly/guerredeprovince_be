<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Government;

class GovernmentController extends Controller
{
    public function show(Government $government): Government
    {
        return $government;
    }
}
