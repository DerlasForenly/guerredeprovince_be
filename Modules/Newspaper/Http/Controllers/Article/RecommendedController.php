<?php

namespace Modules\Newspaper\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Modules\Newspaper\Http\Resources\Article\ShortArticleInfoResource;
use Modules\Newspaper\Models\Article;

class RecommendedController extends Controller
{
    public function __invoke(): ShortArticleInfoResource
    {
        return new ShortArticleInfoResource(Article::first());
    }
}