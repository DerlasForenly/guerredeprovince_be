<?php

namespace App\Http\Filters\Traits;

trait TypeFilter
{
    public function type(int $id): void
    {
        $this->builder->where('type_id', $id);
    }
}