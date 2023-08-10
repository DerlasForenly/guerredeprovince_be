<?php

namespace Modules\Business\Database\factories;

use Database\Factories\Traits\HasName;
use Database\Factories\Traits\HasRegion;
use Database\Factories\Traits\HasUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Modules\Business\Models\Business;
use Modules\Region\Models\Region;
use Modules\Resource\Models\Resource;
use Modules\User\Models\User;

class BusinessFactory extends Factory
{
    use HasName,
        HasUser,
        HasRegion;

    /**
     * @var string
     */
    protected $model = Business::class;

    public function definition(): array
    {
        return [
            'name'        => 'Factory_' . Str::random(5),
            'resource_id' => Resource::inRandomOrder()->first()->id,
            'user_id'     => User::inRandomOrder()->first()->id,
            'region_id'   => Region::inRandomOrder()->first()->id,
        ];
    }

    public function corporation(int $id): BusinessFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'corporation_id' => $id,
            ];
        });
    }
}
