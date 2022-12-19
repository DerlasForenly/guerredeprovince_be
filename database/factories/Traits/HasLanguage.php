<?php

namespace Database\Factories\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @mixin Factory
 */
trait HasLanguage
{
    /**
     * @param int $id
     * @return $this
     */
    public function language(int $id): self
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'language_id' => $id,
            ];
        });
    }
}
