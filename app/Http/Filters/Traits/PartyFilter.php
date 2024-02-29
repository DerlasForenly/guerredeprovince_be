<?php

namespace App\Http\Filters\Traits;

trait PartyFilter
{
    public function party(int $id): void
    {
        $this->builder->where('party_id', $id);
    }
}