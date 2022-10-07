<?php

namespace Modules\Party\Database\factories;

use Database\Factories\Traits\HasName;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Modules\Country\Models\Country;
use Modules\Party\Models\PoliticalParty;

class PoliticalPartyFactory extends Factory
{
    use HasName;

    /**
     * @var string
     */
    protected $model = PoliticalParty::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $country_id = rand(1, Country::all()->count());

        return [
            'name'        => 'Party_' . Str::random(5),
            'description' => 'Test party',
            'tag'         => Str::random(3),
            'country_id'  => $country_id,
        ];
    }

    /**
     * @param $id
     * @return \Modules\Party\Database\factories\PoliticalPartyFactory
     */
    public function country($id): PoliticalPartyFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'country_id' => $id,
            ];
        });
    }

    /**
     * @param $tag
     * @return \Modules\Party\Database\factories\PoliticalPartyFactory
     */
    public function tag($tag): PoliticalPartyFactory
    {
        return $this->state(function (array $attributes) use ($tag) {
            return [
                'tag' => $tag,
            ];
        });
    }
}
