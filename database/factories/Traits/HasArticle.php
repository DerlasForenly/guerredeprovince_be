<?php

namespace Database\Factories\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @mixin Factory
 */
trait HasArticle
{
    /**
     * @param int $id
     * @return $this
     */
    public function article(int $id): self
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'article_id' => $id,
            ];
        });
    }
}
