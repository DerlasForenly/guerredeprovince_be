<?php

namespace Database\Factories\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @mixin Factory
 */
trait HasUser
{
    /**
     * @param int $id
     * @return $this
     */
    public function user(int $id): self
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'user_id' => $id,
            ];
        });
    }
}
