<?php

use Illuminate\Support\Facades\Route;
use Modules\Party\Http\Controllers\PartyController;
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
    'prefix' => 'parties'
], function ($router) {
    Route::get('/', [PartyController::class, 'index']);
    Route::get('{party}', [PartyController::class, 'show']);
    Route::post('/', [PartyController::class, 'store']);
    Route::post('{party}/join', [RequestController::class, 'joinParty']);
    Route::get('{party}/requests', [PartyController::class, 'getJoinRequest']);
    Route::post('{party}/requests/{request}/accept', [RequestController::class, 'acceptParty']);
});
