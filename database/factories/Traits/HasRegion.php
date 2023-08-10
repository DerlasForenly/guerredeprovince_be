<?php

namespace Database\Factories\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @mixin Factory
 */
trait HasRegion
{
    /**
     * @param int $id
     * @return $this
     */
    public function region(int $id): self
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'region_id' => $id,
            ];
        });
    }
}
