<?php

namespace Modules\Newspaper\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Modules\Newspaper\Http\Resources\Comment\CommentResource;
use Modules\Newspaper\Models\Article;

/**
 * Class CommentsController
 */
class CommentsController extends Controller
{
    /**
     * @param \Modules\Newspaper\Models\Article $article
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function __invoke(Article $article): AnonymousResourceCollection
    {
        return CommentResource::collection($article->comments);
    }
}
