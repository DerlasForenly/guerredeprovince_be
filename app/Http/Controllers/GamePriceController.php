<?php

namespace App\Http\Controllers;

use App\Models\GamePrice;
use Illuminate\Http\Request;

class GamePriceController extends Controller
{
    public function index()
    {
        return GamePrice::all();
    }
}
