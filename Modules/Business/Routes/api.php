<?php

use Illuminate\Support\Facades\Route;
use Modules\Business\Http\Controllers\BusinessController;

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

Route::get('businesses/{business}', [BusinessController::class, 'show']);
Route::post('businesses/drop-job', [BusinessController::class, 'dropJob']);
Route::post('businesses/{business}/get-job', [BusinessController::class, 'getJob']);
Route::post('businesses', [BusinessController::class, 'store']);
Route::patch('businesses/{business}', [BusinessController::class, 'update']);
