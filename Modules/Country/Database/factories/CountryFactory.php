<?php

namespace Modules\Country\Database\factories;

use Database\Factories\Traits\HasDescription;
use Database\Factories\Traits\HasName;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Modules\Country\Models\Country;
use Modules\Country\Models\GovernmentType;
use Modules\Country\Models\Nation;

/**
 * Class CountryFactory
 */
class CountryFactory extends Factory
{
    use HasName,
        HasDescription;

    /**
     * @var string
     */
    protected $model = Country::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name'               => 'Country_' . Str::random(10),
            'description'        => 'It is a test country',
            'nation_id'          => rand(1, Nation::all()->count()),
            'government_type_id' => GovernmentType::ABSOLUTE_MONARCHY_ID,
            'color'              => '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT),
            'border_color'       => '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT),
        ];
    }

    public function nation($id): CountryFactory
    {
        return $this->state(function (array $attributes) use ($id) {
            return [
                'nation_id' => $id,
            ];
        });
    }
}
