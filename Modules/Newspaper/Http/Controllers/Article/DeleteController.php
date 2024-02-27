<?php

namespace Modules\Newspaper\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Actions\Article\DeleteAction;
use Modules\Newspaper\Models\Article;

class DeleteController extends Controller
{
    /**
     * @param Article $article
     * @param DeleteAction $action
     * @return JsonResponse
     */
    public function __invoke(
        Article $article,
        DeleteAction $action
    ): JsonResponse {
        sleep(2);
        return $action->handle($article);
    }
}
