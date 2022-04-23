<?php

use Illuminate\Support\Facades\Route;
use Modules\Request\Http\Controllers\RequestController;

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
    'prefix' => 'requests'
], function ($router) {
    Route::post('{request}/decline', [RequestController::class, 'decline']);
    Route::get('citizenship', [RequestController::class, 'citizenshipStore']); // Country leader or Migration minister
    Route::post('citizenship', [RequestController::class, 'citizenshipStore']); // Country leader or Migration minister
    Route::get('registration', [RequestController::class, 'registrationIndex']); // Region leader or Country leader or Migration minister
    Route::post('registration', [RequestController::class, 'registrationStore']); // Region leader or Country leader or Migration minister
    Route::get('party', [RequestController::class, 'partyIndex']); // Party leader
});
