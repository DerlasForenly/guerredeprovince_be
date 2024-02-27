<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\IndexController;
use Modules\User\Http\Controllers\ShowController;
use Modules\User\Http\Controllers\SubscriptionsController;
use Modules\User\Http\Controllers\UpdateController;
use Modules\User\Http\Controllers\UserController;
use Modules\User\Http\Controllers\Avatar\UpdateController as AvatarUpdateController;
use Modules\User\Http\Controllers\Avatar\DeleteController as AvatarDeleteController;

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

    /**
     * Index
     */
    Route::get('/', IndexController::class);

    /**
     * Get specific user
     */
    Route::get('{user}', ShowController::class);

    /**
     * Update specific user
     */
    Route::post('{user}', UpdateController::class)
        ->can('update', 'user');

    /**
     * Get specific user subscriptions
     */
    Route::get('{user}/subscriptions', SubscriptionsController::class);

    /**
     * TODO I dont understand why it is exists
     */
    Route::get('{user}/factories', [UserController::class, 'factories'])->middleware('api');
});
