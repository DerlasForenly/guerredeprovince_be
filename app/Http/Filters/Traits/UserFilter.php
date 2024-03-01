<?php

namespace App\Http\Filters\Traits;

/**
 * @mixin \App\Http\Filters\QueryFilter
 */
trait UserFilter
{
    public function user(int $id): void
    {
        $this->builder->where('user_id', $id);
    }
}