<?php

namespace Modules\Request\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Request\Database\factories\RequestTypeFactory;

class RequestType extends Model
{
    use HasFactory;
}
