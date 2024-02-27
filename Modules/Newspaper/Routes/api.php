<?php

use Illuminate\Support\Facades\Route;
use Modules\Newspaper\Http\Controllers\Article\CommentsController;
use Modules\Newspaper\Http\Controllers\Article\LastController;
use Modules\Newspaper\Http\Controllers\Article\PromotedController;
use Modules\Newspaper\Http\Controllers\Article\RecommendedController;
use Modules\Newspaper\Http\Controllers\Article\SubscriptionsController;
use Modules\Newspaper\Http\Controllers\Article\TopController;
use Modules\Newspaper\Http\Controllers\Article\VoteController;
use Modules\Newspaper\Http\Controllers\Article\AvatarController as ArticleAvatarController;
use Modules\Newspaper\Http\Controllers\Article\IndexController as ArticleIndexController;
use Modules\Newspaper\Http\Controllers\Article\ShowController as ArticleShowController;
use Modules\Newspaper\Http\Controllers\Article\DeleteController as ArticleDeleteController;
use Modules\Newspaper\Http\Controllers\Article\UpdateController as ArticleUpdateController;
use Modules\Newspaper\Http\Controllers\Article\StoreController as ArticleStoreController;

use Modules\Newspaper\Http\Controllers\Newspaper\AssignStaffController;
use Modules\Newspaper\Http\Controllers\Newspaper\AvatarController as NewspaperAvatarController;
use Modules\Newspaper\Http\Controllers\Newspaper\FreeStaffController;
use Modules\Newspaper\Http\Controllers\Newspaper\IndexController as NewspaperIndexController;
use Modules\Newspaper\Http\Controllers\Newspaper\ShowController as NewspaperShowController;
use Modules\Newspaper\Http\Controllers\Newspaper\DeleteController as NewspaperDeleteController;
use Modules\Newspaper\Http\Controllers\Newspaper\SubscribeController;
use Modules\Newspaper\Http\Controllers\Newspaper\UnsubscribeController;
use Modules\Newspaper\Http\Controllers\Newspaper\UpdateController as NewspaperUpdateController;
use Modules\Newspaper\Http\Controllers\Newspaper\StoreController as NewspaperStoreController;

use Modules\Newspaper\Http\Controllers\Comment\ShowController as CommentShowController;
use Modules\Newspaper\Http\Controllers\Comment\DeleteController as CommentDeleteController;
use Modules\Newspaper\Http\Controllers\Comment\UpdateController as CommentUpdateController;
use Modules\Newspaper\Http\Controllers\Comment\StoreController as CommentStoreController;
use Modules\Newspaper\Http\Controllers\Comment\VoteController as CommentVoteController;

use Modules\Newspaper\Http\Controllers\Staff\IndexController as StaffIndexController;
use Modules\Newspaper\Http\Controllers\Staff\ShowController as StaffShowController;
use Modules\Newspaper\Http\Controllers\Staff\DeleteController as StaffDeleteController;
use Modules\Newspaper\Http\Controllers\Staff\UpdateController as StaffUpdateController;
use Modules\Newspaper\Http\Controllers\Staff\StoreController as StaffStoreController;


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
     * Show the newspaper avatar
     */
    Route::get('/{newspaper}/avatar', NewspaperAvatarController::class);

    /**
     * Show the newspaper subscriptions
     */
    Route::get('/{newspaper}/subscriptions', NewspaperAvatarController::class);

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
    Route::post('/{newspaper}/subscribe', SubscribeController::class)
        ->can('subscribe', 'newspaper');

    /**
     * Unsubscribe from a newspaper
     */
    Route::post('/{newspaper}/unsubscribe', UnsubscribeController::class)
        ->can('unsubscribe', 'newspaper');

    /**
     * Assign new staff to a newspaper
     */
    Route::post('/{newspaper}/assign', AssignStaffController::class);

    /**
     * Free staff from a newspaper
     */
    Route::post('/{newspaper}/free/{user}', FreeStaffController::class);

    Route::group([
        'prefix' => '{newspaper}',
    ], function () {
        /**
         * Show the staff of the newspaper
         */
        Route::get('/staff', StaffIndexController::class);

        /**
         * Show the staff person
         */
        Route::get('/staff/{staff}', StaffShowController::class);

        /**
         * Show the newspaper articles
         */
        Route::get('/articles', \Modules\Newspaper\Http\Controllers\Newspaper\ArticlesController::class);

        /**
         * Update the article staff
         */
        Route::post('/staff', StaffUpdateController::class);

        /**
         * Update the article staff
         */
        Route::post('/staff/{staff}', StaffUpdateController::class);

        /**
         * Delete an article staff
         */
        Route::delete('/staff/{staff}', StaffDeleteController::class);
    });
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
    Route::get('/recommended', RecommendedController::class);

    /**
     * Show the article avatar
     */
    Route::get('/{article}/avatar', ArticleAvatarController::class);

    /**
     * Get promoted article
     */
    Route::get('/subscriptions', SubscriptionsController::class);

    /**
     * Show the article
     */
    Route::get('/{article}', ArticleShowController::class);

    /**
     * Show the article comments
     */
    Route::get('/{article}/comments', CommentsController::class);

    /**
     * Create a comment for the article
     */
    Route::post('/{article}/comments', CommentStoreController::class);

    /**
     * Update the article
     */
    //Route::post('/{article}', ArticleUpdateController::class);

    /**
     * Create an article
     */
    Route::post('/', ArticleStoreController::class);

    /**
     * Delete an article
     */
    Route::delete('/{article}', ArticleDeleteController::class)
        ->can('delete', 'article');

    /**
     * Vote for the article
     */
    Route::post('/{article}/vote', VoteController::class)
        ->can('vote', 'article');
});

Route::group([
    'prefix'     => 'comments',
    'middleware' => ['jwt.verify'],
], function () {
    /**
     * Show the article
     */
    Route::get('/{comment}', CommentShowController::class);

    /**
     * Update the article
     */
    Route::post('/{comment}', CommentUpdateController::class)
        ->can('edit', 'comment');

    /**
     * Delete an article
     */
    Route::delete('/{comment}', CommentDeleteController::class);

    /**
     * Vote for the article
     */
    Route::post('/{comment}/vote', CommentVoteController::class)
        ->can('vote', 'comment');
});

/**
 * Show the article
 */
Route::get('/categories', [\Modules\Newspaper\Http\Controllers\CategoryController::class, 'index']);
