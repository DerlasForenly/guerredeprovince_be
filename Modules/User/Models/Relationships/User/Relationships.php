<?php

namespace Modules\User\Models\Relationships\User;

trait Relationships
{
    use HasOne,
        BelongsTo,
        HasMany,
        BelongsToMany;
}
