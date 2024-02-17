<?php

namespace Database\Factories\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @mixin Factory
 */
trait HasPosition
{
    public function position(int $id): self
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'position_id' => $id,
            ];
        });
    }
}
