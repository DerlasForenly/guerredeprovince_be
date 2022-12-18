<?php

use Illuminate\Support\Facades\Route;
use Modules\Newspaper\Http\Controllers\Article\LastController;
use Modules\Newspaper\Http\Controllers\Article\PromotedController;
use Modules\Newspaper\Http\Controllers\Article\SubscriptionsController;
use Modules\Newspaper\Http\Controllers\Article\TopController;
use Modules\Newspaper\Http\Controllers\Article\VoteController;
use Modules\Newspaper\Http\Controllers\Newspaper\AssignStaffController;
use Modules\Newspaper\Http\Controllers\Newspaper\FreeStaffController;
use Modules\Newspaper\Http\Controllers\Newspaper\IndexController as NewspaperIndexController;
use Modules\Newspaper\Http\Controllers\Newspaper\ShowController as NewspaperShowController;
use Modules\Newspaper\Http\Controllers\Newspaper\DeleteController as NewspaperDeleteController;
use Modules\Newspaper\Http\Controllers\Newspaper\SubscribeController;
use Modules\Newspaper\Http\Controllers\Newspaper\UnsubscribeController;
use Modules\Newspaper\Http\Controllers\Newspaper\UpdateController as NewspaperUpdateController;
use Modules\Newspaper\Http\Controllers\Newspaper\StoreController as NewspaperStoreController;
use Modules\Newspaper\Http\Controllers\Article\IndexController as ArticleIndexController;
use Modules\Newspaper\Http\Controllers\Article\ShowController as ArticleShowController;
use Modules\Newspaper\Http\Controllers\Article\DeleteController as ArticleDeleteController;
use Modules\Newspaper\Http\Controllers\Article\UpdateController as ArticleUpdateController;
use Modules\Newspaper\Http\Controllers\Article\StoreController as ArticleStoreController;


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
    'prefix'     => 'newspapers',
    'middleware' => ['jwt.verify'],
], function () {
    /**
     * Get all newspapers
     */
    Route::get('/', NewspaperIndexController::class);

    /**
     * Show the newspaper
     */
    Route::get('/{newspaper}', NewspaperShowController::class);

    /**
     * Update the newspaper
     */
    Route::post('/{newspaper}', NewspaperUpdateController::class);

    /**
     * Create new newspaper
     */
    Route::post('/', NewspaperStoreController::class);

    /**
     * Delete a newspaper
     */
    Route::delete('/{newspaper}', NewspaperDeleteController::class);

    /**
     * Subscribe to a newspaper
     */
    Route::post('/{newspaper}/subscribe', SubscribeController::class);

    /**
     * Unsubscribe from a newspaper
     */
    Route::post('/{newspaper}/unsubscribe', UnsubscribeController::class);

    /**
     * Assign new staff to a newspaper
     */
    Route::post('/{newspaper}/assign', AssignStaffController::class);

    /**
     * Free staff from a newspaper
     */
    Route::post('/{newspaper}/free/{user}', FreeStaffController::class);
});

Route::group([
    'prefix'     => 'articles',
    'middleware' => ['jwt.verify'],
], function () {
    /**
     * Get all articles
     */
    Route::get('/', ArticleIndexController::class);

    /**
     * Get top articles
     */
    Route::get('/top', TopController::class);

    /**
     * Get last articles
     */
    Route::get('/last', LastController::class);

    /**
     * Get promoted article
     */
    Route::get('/promoted', PromotedController::class);

    /**
     * Get promoted article
     */
    Route::get('/subscriptions', SubscriptionsController::class);

    /**
     * Show the article
     */
    Route::get('/{article}', ArticleShowController::class);

    /**
     * Update the article
     */
    Route::post('/{article}', ArticleUpdateController::class);

    /**
     * Create an article
     */
    Route::post('/', ArticleStoreController::class);

    /**
     * Delete an article
     */
    Route::delete('/{article}', ArticleDeleteController::class);

    /**
     * Vote for the article
     */
    Route::post('/{article}/vote', VoteController::class);
});
