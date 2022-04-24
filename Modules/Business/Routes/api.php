<?php

use Illuminate\Support\Facades\Route;
use Modules\Business\Http\Controllers\BusinessController;
use Modules\Business\Http\Controllers\DestroyController;
use Modules\Business\Http\Controllers\ShowController;
use Modules\Business\Http\Controllers\StoreController;
use Modules\Business\Http\Controllers\UpdateController;

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
    'prefix' => 'businesses',
], function () {

    /**
     * Show
     */
    Route::get('businesses/{business}', ShowController::class);

    /**
     * Drop job
     */
    Route::post('businesses/drop-job', [BusinessController::class, 'dropJob']);

    /**
     * Get job
     */
    Route::post('businesses/{business}/get-job', [BusinessController::class, 'getJob']);

    /**
     * Store
     */
    Route::post('businesses', StoreController::class);

    /**
     * Update
     */
    Route::patch('businesses/{business}', UpdateController::class);

    /**
     * Destroy
     */
    Route::delete('businesses/{business}', DestroyController::class);
});


