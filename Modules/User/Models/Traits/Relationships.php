<?php

namespace Modules\User\Models\Traits;

trait Relationships
{
    use HasOne,
        BelongsTo,
        HasMany,
        BelongsToMany;
}
