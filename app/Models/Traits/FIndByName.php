<?php

namespace App\Models\Traits;

/**
 * @mixin \Illuminate\Database\Eloquent\Model
 */
trait FIndByName
{
    public function findByName(string $name)
    {
        return $this->where('name', $name)->first();
    }
}