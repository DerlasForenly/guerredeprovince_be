<?php

use Illuminate\Support\Facades\Route;
use Modules\Country\Http\Controllers\CountryController;

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
    Route::get('/', [CountryController::class, 'index']);
    Route::get('{country}', [CountryController::class, 'show']);
    Route::get('{country}/wars', [CountryController::class, 'wars']);
    Route::get('{country}/regions', [CountryController::class, 'regions']);
});
