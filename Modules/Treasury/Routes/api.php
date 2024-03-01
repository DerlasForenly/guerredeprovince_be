<?php

use Illuminate\Support\Facades\Route;
use Modules\Treasury\Http\Controllers\BusinessTreasuryController;
use Modules\Treasury\Http\Controllers\CountryTreasuryController;
use Modules\Treasury\Http\Controllers\RegionTreasuryController;
use Modules\Treasury\Http\Controllers\UserTreasuryController;

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

Route::get('/users/{user}/treasury', UserTreasuryController::class);
Route::get('/businesses/{business}/treasury', BusinessTreasuryController::class);
Route::get('/regions/{region}/treasury', RegionTreasuryController::class);
Route::get('/countries/{country}/treasury', CountryTreasuryController::class);

Route::get('/trade-offers', \Modules\Treasury\Http\Controllers\IndexTradeOffersController::class);
Route::post('/trade-offers', \Modules\Treasury\Http\Controllers\StoreTradeOfferController::class);
Route::post('/trade-offers/{offer}', \Modules\Treasury\Http\Controllers\AcceptOfferController::class);
Route::delete('/trade-offers/{offer}', \Modules\Treasury\Http\Controllers\DeleteTradeOfferController::class);
