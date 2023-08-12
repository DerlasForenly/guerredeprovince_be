<?php

use Illuminate\Support\Facades\Route;

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
    'prefix' => 'world-map',
    'middleware' => ['jwt.verify'],
], function () {
    Route::get('/', \Modules\Region\Http\Controllers\WorldMapController::class);
});
