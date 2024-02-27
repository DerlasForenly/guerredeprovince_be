<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\LoginController;
use Modules\Auth\Http\Controllers\LogoutController;
use Modules\Auth\Http\Controllers\MeController;
use Modules\Auth\Http\Controllers\RefreshController;
use Modules\Auth\Http\Controllers\RegisterController;

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
    'prefix' => 'auth',
], function () {

    /**
     * Register
     */
    Route::post('/register', RegisterController::class)
        ->name('sign-up');

    /**
     * Login
     */
    Route::post('/login', LoginController::class)
        ->name('sign-in');

    Route::group([
        'middleware' => ['jwt.verify'],
    ], function () {

        /**
         * Refresh
         */
        Route::post('/refresh', RefreshController::class)
            ->name('refresh');

        /**
         * Me
         */
        Route::get('/me', MeController::class)
            ->name('me');

        /**
         * Logout
         */
        Route::post('/logout', LogoutController::class)
            ->name('sign-out');
    });
});
