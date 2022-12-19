<?php

namespace Database\Factories\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @mixin Factory
 */
trait HasComment
{
    /**
     * @param int $id
     * @return $this
     */
    public function comment(int $id): self
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'comment_id' => $id,
            ];
        });
    }
}
