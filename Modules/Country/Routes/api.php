<?php

use Illuminate\Support\Facades\Route;
use Modules\Country\Http\Controllers\AcceptRequestController;
use Modules\Country\Http\Controllers\DeclineRequestController;
use Modules\Country\Http\Controllers\IndexController;
use Modules\Country\Http\Controllers\IndexRequestController;
use Modules\Country\Http\Controllers\ShowController;
use Modules\Country\Http\Controllers\StoreRequestController;
use Modules\Country\Models\Country;

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
    'prefix' => 'countries'
], function ($router) {
    /**
     * Get all countries
     */
    Route::get('/', IndexController::class);

    /**
     * Get specified country
     */
    Route::get('/{country}', ShowController::class);

    Route::group([
        'prefix' => '/{country}/requests'
    ], function () {
        /**
         * Get all citizenship requests
         */
        Route::get('/', IndexRequestController::class);

        /**
         * Create new citizenship request
         */
        Route::post('/', StoreRequestController::class)
            ->can('createRequest', Country::class);

        /**
         * Accept specified citizenship request
         */
        Route::post('/{request}/accept', AcceptRequestController::class)
            ->can('acceptRequest', Country::class);

        /**
         * Decline specified citizenship request
         */
        Route::post('/{request}/decline', DeclineRequestController::class)
            ->can('declineRequest', Country::class);
    });
});
