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
use Modules\Business\Http\Middleware\BusyMiddleware;
use Modules\Business\Http\Middleware\EmployedMiddleware;
use Modules\Business\Http\Middleware\MinWorkTimeMiddleware;
use Modules\Business\Http\Middleware\NotBusyMiddleware;
use Modules\Business\Http\Middleware\UnemployedMiddleware;

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
     * Drop job
     */
    Route::post('/drop-job', DropJobController::class)
        ->middleware(EmployedMiddleware::class);

    /**
     * Get job
     */
    Route::post('/{business}/get-job', GetJobController::class)
        ->middleware(UnemployedMiddleware::class);

    /**
     * Show
     */
    Route::get('/{business}', ShowController::class);

    /**
     * Store
     */
    Route::post('/', StoreController::class);

    /**
     * Update
     */
    Route::patch('/{business}', UpdateController::class);

    /**
     * Destroy
     */
    Route::delete('/{business}', DestroyController::class);

    /**
     * Work
     */
    Route::post('/work', WorkController::class)
        ->middleware(NotBusyMiddleware::class)
        ->middleware(EmployedMiddleware::class);

    /**
     * Get salary for work
     */
    Route::post('/get-salary', GetSalaryController::class)
        ->middleware(BusyMiddleware::class)
        ->middleware(MinWorkTimeMiddleware::class)
        ->middleware(EmployedMiddleware::class);
});


