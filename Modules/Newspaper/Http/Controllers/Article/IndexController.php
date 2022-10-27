<?php

namespace Modules\Newspaper\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Modules\Newspaper\Actions\Article\IndexAction;

class IndexController extends Controller
{
    public function __invoke(
        IndexAction $action
    ) {
        return $action->handle();
    }
}
