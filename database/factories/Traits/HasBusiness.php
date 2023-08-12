<?php

namespace Database\Factories\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @mixin Factory
 */
trait HasBusiness
{
    /**
     * @param int $id
     * @return $this
     */
    public function business(int $id): self
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'business_id' => $id,
            ];
        });
    }
}
