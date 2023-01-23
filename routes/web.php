<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'middleware' => 'ngrok',
], function () {
    Route::get('avatars/default.jpg', function () {
        if (!Storage::exists("avatars/default.jpg")) {
            return 404;
        }

        return response()->file(Storage::path("avatars/default.jpg"));
    });

    Route::get('avatars/newspapers/{name}', function ($name) {
        if (!Storage::exists("avatars/newspapers/{$name}")) {
            return 404;
        }

        return response()->file(Storage::path("avatars/newspapers/{$name}"));
    });

    Route::get('backgrounds/background.jpg', function () {
        if (!Storage::exists("backgrounds/background.jpg")) {
            return 404;
        }

        return response()->file(Storage::path("backgrounds/background.jpg"));
    });

    Route::get('avatars/users/{name}', function ($name) {
        if (!Storage::exists("avatars/users/{$name}")) {
            return 404;
        }

        return response()->file(Storage::path("avatars/users/{$name}"));
    });

    Route::get('avatars/businesses/{name}', function ($name) {
        if (!Storage::exists("avatars/businesses/{$name}")) {
            return 404;
        }

        return response()->file(Storage::path("avatars/businesses/{$name}"));
    });

    Route::get('avatars/countries/{name}', function ($name) {
        if (!Storage::exists("avatars/countries/{$name}")) {
            return 404;
        }

        return response()->file(Storage::path("avatars/countries/{$name}"));
    });

});

