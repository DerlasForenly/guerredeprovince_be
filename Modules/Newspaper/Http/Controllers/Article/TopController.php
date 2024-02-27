<?php

namespace Modules\Newspaper\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use Modules\Newspaper\Models\Article;

class TopController extends Controller
{
    public function __invoke()
    {
        return Article::all();
    }
}
