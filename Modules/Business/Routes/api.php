<?php

use Illuminate\Support\Facades\Route;
use Modules\Business\Http\Controllers\DestroyController;
use Modules\Business\Http\Controllers\DropJobController;
use Modules\Business\Http\Controllers\GetJobController;
use Modules\Business\Http\Controllers\GetSalaryController;
use Modules\Business\Http\Controllers\ShowController;
use Modules\Business\Http\Controllers\StoreController;
use Modules\Business\Http\Controllers\UpdateController;
use Modules\Business\Http\Controllers\WorkController;
use Modules\Business\Http\Middleware\MinWorkTimeMiddleware;
use Modules\Business\Models\Business;

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
    'prefix' => 'businesses',
    'middleware' => ['jwt.verify'],
], function () {
    /**
     * Work
     */
    Route::post('/work', WorkController::class)
        ->can('work', Business::class);

    /**
     * Get salary for work
     */
    Route::post('/get-salary', GetSalaryController::class)
        ->middleware(MinWorkTimeMiddleware::class)
        ->can('getSalary', Business::class);

    /**
     * Drop job
     */
    Route::post('/drop-job', DropJobController::class)
        ->can('dropJob', Business::class);

    /**
     * Get job
     */
    Route::post('/{business}/get-job', GetJobController::class)
        ->can('getJob', 'business');

    /**
     * Show
     */
    Route::get('/{business}', ShowController::class);

    /**
     * Store
     */
    Route::post('/', StoreController::class);

    /**
     * Get all businesses
     */
    Route::get('/', \Modules\Business\Http\Controllers\IndexController::class);

    /**
     * Update
     */
    Route::patch('/{business}', UpdateController::class);

    /**
     * Destroy
     */
    Route::delete('/{business}', DestroyController::class);
});


