<?php

use Illuminate\Support\Facades\Route;
use Modules\Party\Http\Controllers\AcceptRequestController;
use Modules\Party\Http\Controllers\IndexController;
use Modules\Party\Http\Controllers\LeavePartyController;
use Modules\Party\Http\Controllers\ShowController;
use Modules\Party\Http\Controllers\StoreController;
use Modules\Party\Http\Controllers\IndexRequestController;
use Modules\Party\Http\Controllers\ShowRequestController;
use Modules\Party\Http\Controllers\StoreRequestController;

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
    'prefix' => 'parties'
], function () {
    /**
     * Get all parties
     */
    Route::get('/', IndexController::class);

    /**
     * Create new party
     */
    Route::post('/', StoreController::class);

    /**
     * Get specified party
     */
    Route::get('/{party}', ShowController::class);

    /**
     * Leave political party
     */
    Route::post('/leave', LeavePartyController::class);

    Route::group([
        'prefix' => '/{party}/requests'
    ], function () {
        /**
         * Get all join party requests
         */
        Route::get('/', IndexRequestController::class);

        /**
         * Create new join party request
         */
        Route::post('/', StoreRequestController::class);

        /**
         * Get specified join party request
         */
        Route::get('/{request}', ShowRequestController::class);

        /**
         * Accept specified join party request
         */
        Route::post('/{request}/accept', AcceptRequestController::class);

        /**
         * Decline specified join party request
         */
        Route::post('/{request}/decline', AcceptRequestController::class);
    });
});
