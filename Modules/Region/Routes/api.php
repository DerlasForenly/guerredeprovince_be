<?php

use Illuminate\Support\Facades\Route;
use Modules\Region\Http\Controllers\CancelTravelingController;
use Modules\Region\Http\Controllers\TravelToController;
use Modules\Region\Models\Region;

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
     * Travel to the new region
     */
    Route::post('/travel-to/{region}', TravelToController::class)
        ->can('travelTo', Region::class);

    /**
     * Cancel travel to the new region
     */
    Route::post('/travel-to/cancel', CancelTravelingController::class)
        ->can('cancelTraveling', Region::class);
});
