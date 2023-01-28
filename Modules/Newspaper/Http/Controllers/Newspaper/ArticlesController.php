<?php

namespace Modules\Newspaper\Http\Controllers\Newspaper;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Modules\Newspaper\Http\Resources\Article\ArticleResource;
use Modules\Newspaper\Models\Newspaper;

class ArticlesController extends Controller
{
    /**
     * @param \Modules\Newspaper\Models\Newspaper $newspaper
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Newspaper $newspaper): JsonResponse
    {
        return response()->json(ArticleResource::collection($newspaper->articles()->paginate(9)));
    }
}