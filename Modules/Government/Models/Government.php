<?php

namespace Modules\Government\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Government\Models\Traits\Relationships;

class Government extends Model
{
    use HasFactory,
        Relationships;
}
