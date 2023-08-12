<?php

namespace Database\Factories\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @mixin Factory
 */
trait HasResource
{
    public function resource($id): self
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'resource_id' => $id,
            ];
        });
    }
}
