<?php

namespace Modules\Newspaper\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Modules\Newspaper\Http\Resources\Article\ArticleResource;
use Modules\Newspaper\Models\Article;

/**
 * Class ShowController
 */
class ShowController extends Controller
{
    /**
     * @param \Modules\Newspaper\Models\Article $article
     * @return \Modules\Newspaper\Http\Resources\Article\ArticleResource
     */
    public function __invoke(
        Article $article
    ): ArticleResource {
        return new ArticleResource($article);
    }
}
