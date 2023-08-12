<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nwidart\Modules\Module;

trait HasFactory
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return Factory
     */
    protected static function newFactory(): Factory
    {
        $path = explode('\\', self::class);
        $path = "$path[0]\\$path[1]\\Database\\factories\\$path[3]Factory";
        return app($path)->new();
    }
}
