<?php

namespace Modules\Action\Database\factories;

use Database\Factories\Traits\HasName;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Action\Models\ActionType;

class ActionTypeFactory extends Factory
{
    use HasName;

    /**
     * @var string
     */
    protected $model = ActionType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            //
        ];
    }
}
