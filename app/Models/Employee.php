<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'business_id',
        'salary',
        'salary_type',
    ];

    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
