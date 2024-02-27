<?php

namespace Modules\User\Models\Relationships\User;

use Modules\Newspaper\Models\Article;
use Modules\Newspaper\Models\Newspaper;

/**
 * @mixin \Modules\User\Models\User
 */
trait HasManyThrough
{
    public function subscriptionArticles(): \Illuminate\Database\Eloquent\Relations\HasManyThrough
    {
        return $this->hasManyThrough(Article::class, Newspaper::class);
    }
}
