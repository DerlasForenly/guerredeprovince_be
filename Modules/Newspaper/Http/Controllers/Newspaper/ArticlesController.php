<?php

namespace Modules\Newspaper\Http\Controllers\Newspaper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Modules\Newspaper\Http\Resources\Article\ShortArticleInfoResource;
use Modules\Newspaper\Models\Newspaper;

class ArticlesController extends Controller
{
    /**
     * @param \Modules\Newspaper\Models\Newspaper $newspaper
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function __invoke(Newspaper $newspaper): AnonymousResourceCollection
    {
        return ShortArticleInfoResource::collection($newspaper->articles()->latest()->paginate(9));
    }
}