<?php

namespace Modules\Newspaper\Actions\Article;

use Modules\Newspaper\Models\Article;

class IndexAction
{
    public function handle()
    {
        return Article::all();
    }
}
