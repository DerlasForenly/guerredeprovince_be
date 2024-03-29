<?php

namespace Modules\Newspaper\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Modules\Newspaper\Http\Resources\Article\ShortArticleInfoResource;
use Modules\Newspaper\Models\Article;
use Modules\User\Models\User;

/**
 * Class SubscriptionsController
 *
 * Get articles by user subscriptions
 */
class SubscriptionsController extends Controller
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function __invoke(): AnonymousResourceCollection
    {
        /**
         * @var User $user
         */
        $user = auth()->userOrFail();
        $newspaperIds = $user->subscriptionNewspapers->pluck('id');
        $articles = Article::whereIn('newspaper_id', $newspaperIds)->latest()->paginate(9);

        return ShortArticleInfoResource::collection($articles);
    }
}
