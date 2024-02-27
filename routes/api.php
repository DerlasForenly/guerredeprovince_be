<?php

use Illuminate\Support\Facades\Redis;

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

use Illuminate\Support\Facades\Route;

Route::get('/test-redis', function () {
    try {
        Redis::set('test', 'Hello, Redis!');

        return Redis::get('test');
    } catch (Exception $e) {
        return "Error: " . $e->getMessage();
    }
});
