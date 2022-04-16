<?php

namespace App\Http\Controllers\GamePrice;

use App\Http\Controllers\Controller;
use App\Models\GamePrice;

class GamePriceController extends Controller
{
    public function index()
    {
        return GamePrice::all();
    }
}
