<?php

namespace App\Http\Filters\Traits;

/**
 * @mixin \App\Http\Filters\QueryFilter
 */
trait StatusFilter
{
    public function status(int $id): void
    {
        $this->builder->where('status_id', $id);
    }
}