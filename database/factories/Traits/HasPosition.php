<?php

namespace Database\Factories\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @mixin Factory
 */
trait HasPosition
{
    public function position($id): self
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'position_type_id' => $id,
            ];
        });
    }
}
