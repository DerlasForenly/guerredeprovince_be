<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\UserController;

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
    'prefix' => 'users'
], function ($router) {
    Route::get('{user}/factories', [UserController::class, 'factories'])->middleware('api');
    Route::get('{user}', [UserController::class, 'show']);
    Route::patch('{user}', [UserController::class, 'update']);
});
