<?php

namespace Database\Factories\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @mixin Factory
 */
trait HasContent
{
    /**
     * @param string $content
     * @return $this
     */
    public function content(string $content): self
    {
        return $this->state(function (array $attributes) use ($content) {
            return [
                'content' => $content,
            ];
        });
    }
}
