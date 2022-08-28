<?php

use Illuminate\Support\Facades\Route;
use Modules\Region\Http\Controllers\TravelToController;

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
    'prefix' => 'region'
], function () {
    /**
     * Travel to new region
     */
    Route::get('/travel-to/{region}', TravelToController::class);
});
