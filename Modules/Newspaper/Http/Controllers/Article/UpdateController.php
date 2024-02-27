<?php

namespace Modules\Newspaper\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Modules\Newspaper\Actions\Article\UpdateAction;
use Modules\Newspaper\Http\Requests\Article\UpdateRequest;
use Modules\Newspaper\Models\Article;

class UpdateController extends Controller
{
    public function __invoke(
        Article $article,
        UpdateAction $action,
        UpdateRequest $request
    ) {
        return $action->handler($article, $request->toArray());
    }
}
