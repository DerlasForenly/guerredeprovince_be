<?php

use Illuminate\Support\Facades\Route;
use Modules\Action\Http\Controllers\ActionController;
use Modules\War\Http\Controllers\WarController;

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

Route::group([
    'prefix' => 'wars'
], function ($router) {
    Route::post('take-damage', [WarController::class, 'takeDamage']);
    Route::get('{war}', [WarController::class, 'show']);
    Route::get('/', [WarController::class, 'index']);
    Route::get('{war}/countries', [WarController::class, 'countriesInWar']);
    Route::post('', [WarController::class, 'store']);
    Route::delete('{war}', [WarController::class, 'remove']);
    Route::post('{war}/fight', [ActionController::class, 'fight']);
});
