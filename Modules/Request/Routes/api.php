<?php

use Illuminate\Support\Facades\Route;
use Modules\Request\Http\Controllers\IndexController;
use Modules\Request\Http\Controllers\ShowController;

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
    /**
     *
     */
    Route::get('/', IndexController::class);

    /**
     *
     */
    Route::get('/{request}', ShowController::class);
});
