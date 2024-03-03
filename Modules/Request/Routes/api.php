<?php

use Illuminate\Support\Facades\Route;
use Modules\Request\Http\Controllers\AcceptRequestController;
use Modules\Request\Http\Controllers\DeclineRequestController;
use Modules\Request\Http\Controllers\IndexController;
use Modules\Request\Http\Controllers\ShowController;
use Modules\Request\Http\Controllers\StoreController;

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
    'prefix' => 'requests',
    'middleware' => ['jwt.verify'],
], function ($router) {
    /**
     *
     */
    Route::get('/', IndexController::class);

    /**
     * Create new join party request
     */
    Route::post('/', StoreController::class)
        ->can('createRequest', \Modules\Request\Models\Request::class);

    /**
     *
     */
    Route::get('/{requestModel}', ShowController::class);

    /**
     * Accept specified join party request
     */
    Route::post('/{requestModel}/accept', AcceptRequestController::class)
        ->can('acceptRequest', 'requestModel');

    /**
     * Decline specified join party request
     */
    Route::post('/{requestModel}/decline', DeclineRequestController::class)
        ->can('declineRequest', 'requestModel');
});
