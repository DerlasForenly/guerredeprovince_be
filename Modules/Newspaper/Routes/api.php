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

Route::group([
    'prefix' => 'newspapers'
], function () {
    /**
     * Get all newspapers
     */
    Route::get('/', IndexController::class);

    /**
     * Show the newspaper
     */
    Route::get('/{newspaper}', ShowController::class);

    /**
     * Create new newspaper
     */
    Route::post('/', StoreController::class);

    /**
     * Delete a newspaper
     */
    Route::delete('/{newspaper}', DeleteController::class);

    /**
     * Subscribe to a newspaper
     */
    Route::post('/{newspaper}/subscribe', SubscribeController::class);

    /**
     * Unsubscribe from a newspaper
     */
    Route::post('/{newspaper}/unsubscribe', UnsubscribeController::class);

    /**
     * Assign new staff to a newspaper
     */
    Route::post('/{newspaper}/assign', AddStaffController::class);

    /**
     * Free staff from a newspaper
     */
    Route::post('/{newspaper}/free/{user}', RemoveStaffController::class);
});
