<?php

namespace Modules\Newspaper\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Modules\Newspaper\Http\Resources\Article\ShortArticleInfoResource;
use Modules\Newspaper\Services\RecommendationsService;
use Modules\User\Models\User;

class RecommendedController extends Controller
{
    public function __invoke(): ShortArticleInfoResource
    {
        $service = new RecommendationsService();

        /**
         * @var User $user
         */
        $user    = auth()->userOrFail();
        $article = $service->createRecommendationList($user);

        return new ShortArticleInfoResource($article);
    }
}