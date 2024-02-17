<?php

namespace Database\Factories\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @mixin Factory
 */
trait HasPoliticalParty
{
    public function politicalParty(int $id): self
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'political_party_id' => $id,
            ];
        });
    }
}
