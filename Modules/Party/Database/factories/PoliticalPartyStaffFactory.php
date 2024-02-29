<?php

namespace Modules\Party\Database\factories;

use Database\Factories\Traits\HasPoliticalParty;
use Database\Factories\Traits\HasPosition;
use Database\Factories\Traits\HasUser;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Party\Models\PoliticalPartyStaff;
use Modules\Position\Models\Position;

/**
 * @method user(int $id)
 * @method position(int $id)
 * @method party(int $id)
 */
class PoliticalPartyStaffFactory extends Factory
{
    use HasUser,
        HasPosition,
        HasPoliticalParty;

    /**
     * @var string
     */
    protected $model = PoliticalPartyStaff::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'position_id'   => Position::POLITICAL_PARTY_MEMBER_ID,
            'in_government' => true,
        ];
    }
}
