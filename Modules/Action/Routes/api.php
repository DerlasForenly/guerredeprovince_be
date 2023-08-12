<?php

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

use Illuminate\Support\Facades\Route;
use Modules\Action\Http\Controllers\CancelTravelingController;
use Modules\Action\Http\Controllers\WorkController;
use Modules\Action\Models\Action;
use Modules\Action\Http\Controllers\TravelToController;

Route::group([
    'prefix' => 'world-map',
    'middleware' => ['jwt.verify'],
], function () {
    /**
     * Cancel travel to the new region
     */
    Route::post('/traveling/cancel', CancelTravelingController::class)
        ->can('cancelTraveling', Action::class);

    /**
     * Travel to the new region
     */
    Route::post('/traveling/{region}', TravelToController::class)
        ->can('travelTo', 'region');
});

Route::group([
    'prefix' => 'businesses',
    'middleware' => ['jwt.verify'],
], function () {
    /**
     * Work
     */
    Route::post('/work', WorkController::class)
        ->can('work', Action::class);
});
