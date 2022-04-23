<?php

namespace Modules\Business\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Modules\Business\Models\Business;
use Modules\Region\Models\Region;
use Modules\Resource\Models\Resource;
use Modules\User\Models\User;

class BusinessFactory extends Factory
{
    protected $model = Business::class;

    public function definition(): array
    {
        return [
            'name' => 'Factory_' . Str::random(5),
            'resource_id' => rand(1, Resource::all()->count()),
            'user_id' => rand(1, User::all()->count()),
            'region_id' => rand(1, Region::all()->count()),
        ];
    }

    public function user($id): BusinessFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'user_id' => $id,
            ];
        });
    }

    public function corporation($id): BusinessFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'corporation_id' => $id,
            ];
        });
    }

    public function region($id): BusinessFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'region_id' => $id,
            ];
        });
    }
}
