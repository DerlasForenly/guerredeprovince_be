<?php

namespace Modules\Newspaper\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;
use Modules\Newspaper\Actions\Article\IndexAction;

class IndexController extends Controller
{
    public function __invoke(
        IndexAction $action
    ): Collection {
        return $action->handle();
    }
}
