<?php

use Illuminate\Support\Facades\Route;
use Modules\GamePrice\Http\Controllers\GamePriceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('game-prices/', [GamePriceController::class, 'index']);
