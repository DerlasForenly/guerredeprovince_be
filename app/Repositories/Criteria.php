<?php

namespace App\Repositories;

abstract class Criteria
{
    public function __construct()
    {
    }

    public abstract function apply($query);
}