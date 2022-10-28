<?php

namespace Database\Factories\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @mixin Factory
 */
trait HasNewspaper
{
    /**
     * @param int $newspaperId
     * @return $this
     */
    public function newspaper(int $newspaperId): self
    {
        return $this->state(function (array $attributes) use ($newspaperId) {
            return [
                'newspaper_id' => $newspaperId,
            ];
        });
    }
}
