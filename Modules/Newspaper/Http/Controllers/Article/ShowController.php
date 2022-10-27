<?php

namespace Modules\Newspaper\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Modules\Newspaper\Models\Article;

class ShowController extends Controller
{
    public function __invoke(
        Article $article
    ) {
        return $article;
    }
}
