<?php

namespace Modules\GamePrice\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\GamePrice\Models\GamePrice;

class GamePriceController extends Controller
{
    public function index()
    {
        return GamePrice::all();
    }
}
