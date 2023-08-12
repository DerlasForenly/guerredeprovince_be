<?php

namespace Modules\User\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Modules\Region\Models\Region;
use Modules\User\Models\PoliticalView;
use Modules\User\Models\User;
use function now;

/**
 * Class UserFactory
 */
class UserFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'nickname'               => $this->faker->name(),
            'email'                  => $this->faker->unique()->safeEmail(),
            'email_verified_at'      => now(),
            'description'            => 'I am a test player',
            'password'               => Hash::make('password123'),
            'remember_token'         => Str::random(10),
            'avatar'                 => 'avatars/default.jpg',
            'current_region_id'      => Region::inRandomOrder()->first()->id,
            'registration_region_id' => Region::inRandomOrder()->first()->id,
             //'political_view_id'      => PoliticalView::inRandomOrder()->first()->id,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return Factory
     */
    public function unverified(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    public function nation($id): UserFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'nation_id' => $id,
            ];
        });
    }

    public function nickname($nickname): UserFactory
    {
        return $this->state(function (array $attributes) use ($nickname) {
            return [
                'nickname' => $nickname,
            ];
        });
    }

    public function email($email): UserFactory
    {
        return $this->state(function (array $attributes) use ($email) {
            return [
                'email' => $email,
            ];
        });
    }

    public function country($id): UserFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'country_id' => $id,
            ];
        });
    }
}
