<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Database\factories\PositionTypeFactory;

class PositionType extends Model
{
    use HasFactory;
}
