<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\GamePriceController;
use App\Http\Controllers\GovernmentController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

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
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/me', [AuthController::class, 'me']);
});

Route::post('actions/work', [ActionController::class, 'work']);
Route::post('actions/salary', [ActionController::class, 'salary']);

Route::get('countries/', [CountryController::class, 'index']);
Route::get('countries/{country}', [CountryController::class, 'show']);
Route::get('countries/{country}/wars', [CountryController::class, 'wars']);
Route::get('countries/{country}/regions', [CountryController::class, 'regions']);
Route::post('countries/{country}/army/join', [RequestController::class, 'joinArmy']);
Route::post('countries/{country}/army/requests/{request}/accept', [RequestController::class, 'acceptArmy']);
Route::post('countries/{country}/army/requests/{request}/decline', [RequestController::class, 'declineArmy']);

Route::get('governments/{government}', [GovernmentController::class, 'show']);

Route::get('users/{user}/factories', [UserController::class, 'factories'])->middleware('api');
Route::get('users/{user}', [UserController::class, 'show']);
Route::patch('users/{user}', [UserController::class, 'update']);

Route::get('businesses/{business}', [BusinessController::class, 'show']);
Route::post('businesses/drop-job', [BusinessController::class, 'dropJob']);
Route::post('businesses/{business}/get-job', [BusinessController::class, 'getJob']);
Route::post('businesses', [BusinessController::class, 'store']);
Route::patch('businesses/{business}', [BusinessController::class, 'update']);

Route::group([
    'prefix' => 'requests'
], function ($router) {
    Route::post('{request}/decline', [RequestController::class, 'decline']);
    Route::get('citizenship', [RequestController::class, 'citizenshipStore']); // Country leader or Migration minister
    Route::post('citizenship', [RequestController::class, 'citizenshipStore']); // Country leader or Migration minister
    Route::get('registration', [RequestController::class, 'registrationIndex']); // Region leader or Country leader or Migration minister
    Route::post('registration', [RequestController::class, 'registrationStore']); // Region leader or Country leader or Migration minister
    Route::get('party', [RequestController::class, 'partyIndex']); // Party leader
});

Route::group([
    'prefix' => 'wars'
], function ($router) {
    Route::post('take-damage', [WarController::class, 'takeDamage']);
    Route::get('{war}', [WarController::class, 'show']);
    Route::get('/', [WarController::class, 'index']);
    Route::get('{war}/countries', [WarController::class, 'countriesInWar']);
    Route::post('', [WarController::class, 'store']);
    Route::delete('{war}', [WarController::class, 'remove']);
    Route::post('{war}/fight', [ActionController::class, 'fight']);
});

Route::group([
    'prefix' => 'parties'
], function ($router) {
    Route::get('/', [PartyController::class, 'index']);
    Route::get('{party}', [PartyController::class, 'show']);
    Route::post('/', [PartyController::class, 'store']);
    Route::post('{party}/join', [RequestController::class, 'joinParty']);
    Route::get('{party}/requests', [PartyController::class, 'getJoinRequest']);
    Route::post('{party}/requests/{request}/accept', [RequestController::class, 'acceptParty']);
});

Route::get('game-prices/', [GamePriceController::class, 'index']);

