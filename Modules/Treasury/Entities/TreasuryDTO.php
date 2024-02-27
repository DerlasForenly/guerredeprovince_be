<?php

namespace Modules\Treasury\Entities;

class TreasuryDTO
{
    public function __construct(
        public int $resourceId,
        public int $quantity,
        public string $resourceName,
    ) {}
}
