<?php

namespace Modules\Newspaper\Database\factories;

use Database\Factories\Traits\HasNewspaper;
use Database\Factories\Traits\HasPosition;
use Database\Factories\Traits\HasUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Newspaper\Models\NewspaperStaff;

/**
 * Class NewspaperStaffFactory
 */
class NewspaperStaffFactory extends Factory
{
    use HasUser,
        HasPosition,
        HasNewspaper;

    /**
     * @var string
     */
    protected $model = NewspaperStaff::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [];
    }
}
