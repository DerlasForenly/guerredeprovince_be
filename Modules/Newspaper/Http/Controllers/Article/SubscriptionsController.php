<?php

namespace Modules\Newspaper\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Modules\Newspaper\Http\Resources\Article\ShortArticleInfoResource;
use Modules\Newspaper\Models\Article;

class SubscriptionsController extends Controller
{
    public function __invoke()
    {
        $user = auth()->userOrFail();
        $newspaperIds = $user->subscriptionNewspapers->pluck('id');
        $articles = Article::whereIn('newspaper_id', $newspaperIds)->latest()->paginate(5);

        return ShortArticleInfoResource::collection($articles);
    }
}
