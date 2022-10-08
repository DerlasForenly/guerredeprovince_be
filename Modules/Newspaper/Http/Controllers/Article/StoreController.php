<?php

namespace Modules\Newspaper\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Modules\Newspaper\Actions\Article\StoreAction;
use Modules\Newspaper\Http\Requests\Article\StoreRequest;

class StoreController extends Controller
{
    public function __invoke(
        StoreRequest $request,
        StoreAction $action
    ) {
        return $action->handle($request->params);
    }
}
