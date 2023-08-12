<?php

namespace Database\Factories\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @mixin Factory
 */
trait HasDescription
{
    public function description($description): self
    {
        return $this->state(function (array $attributes) use ($description) {
            return [
                'description' => $description,
            ];
        });
    }
}
