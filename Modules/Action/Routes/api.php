<?php

use Illuminate\Support\Facades\Route;
use Modules\Action\Http\Controllers\ActionController;

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
    'prefix' => 'actions'
], function ($router) {
    Route::post('work', [ActionController::class, 'work']);
    Route::post('salary', [ActionController::class, 'salary']);
});
