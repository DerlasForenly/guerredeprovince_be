<?php

namespace Modules\Position\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Position
 *
 * @property int $id
 * @property string $name
 */
class Position extends Model
{
    use HasFactory;

    public const POLITICAL_PARTY_LEADER = 'Political party leader';
    public const COUNTRY_LEADER = 'Country leader';
    public const REGION_LEADER = 'Region leader';
    public const UNION_LEADER = 'Union leader';
    public const CORPORATION_LEADER = 'Corporation leader';

    public const MINISTER_OF_DEFENCE = 'Minister of Defence';
    public const FOREIGN_MINISTER = 'Foreign Minister';
    public const PRIME_MINISTER = 'Prime Minister';
    public const MINISTER_OF_ECONOMY = 'Minister of Economy';
    public const MINISTER_OF_ENERGY = 'Ministry of Energy';
    public const MINISTER_OF_INFRASTRUCTURE = 'Ministry of Infrastructure';
    public const MINISTER_OF_HEALTH = 'Minister of Health Protection';
    public const MINISTER_OF_SOCIAL = 'Ministry of Social Policy';

    public const NAVY_LEADER = 'Leader of the Navy';
    public const AIR_FORCE_LEADER = 'Leader of the Air Force';
    public const GROUND_FORCES_LEADER = 'Leader of the Fround Forces';
    public const ARMY_LEADER = 'Head commander of the Army';

    public const NEWSPAPER_OWNER = 'Newspaper owner';
    public const NEWSPAPER_SECRETARY = 'Newspaper secretary';
    public const NEWSPAPER_EDITOR = 'Newspaper editor';

    public const POLITICAL_PARTY_SECRETARY = 'Political party Secretary';
    public const POLITICAL_PARTY_MEMBER = 'Political party member';

    public const BUSINESS_OWNER = 'Business owner';
    public const BUSINESS_SECRETARY = 'Business secretary';

    public const DEPUTY = 'Deputy';
    public const EMPLOYEE = 'Employee';

    public const POLITICAL_PARTY_LEADER_ID = 1;
    public const COUNTRY_LEADER_ID = 2;
    public const REGION_LEADER_ID = 3;
    public const UNION_LEADER_ID = 4;
    public const CORPORATION_LEADER_ID = 5;

    public const MINISTER_OF_DEFENCE_ID = 6;
    public const FOREIGN_MINISTER_ID = 7;
    public const PRIME_MINISTER_ID = 8;
    public const MINISTER_OF_ECONOMY_ID = 9;
    public const MINISTER_OF_ENERGY_ID = 10;
    public const MINISTER_OF_INFRASTRUCTURE_ID = 11;
    public const MINISTER_OF_HEALTH_ID = 12;
    public const MINISTER_OF_SOCIAL_ID = 13;

    public const NAVY_LEADER_ID = 14;
    public const AIR_FORCE_LEADER_ID = 15;
    public const GROUND_FORCES_LEADER_ID = 16;
    public const ARMY_LEADER_ID = 17;

    public const NEWSPAPER_OWNER_ID = 18;
    public const NEWSPAPER_SECRETARY_ID = 19;
    public const NEWSPAPER_EDITOR_ID = 20;

    public const POLITICAL_PARTY_SECRETARY_ID = 21;
    public const POLITICAL_PARTY_MEMBER_ID = 22;

    public const BUSINESS_OWNER_ID = 23;
    public const BUSINESS_SECRETARY_ID = 24;

    public const DEPUTY_ID = 25;
    public const EMPLOYEE_ID = 26;

    public const POSITIONS = [
        self::POLITICAL_PARTY_LEADER_ID     => self::POLITICAL_PARTY_LEADER,
        self::COUNTRY_LEADER_ID             => self::COUNTRY_LEADER,
        self::REGION_LEADER_ID              => self::REGION_LEADER,
        self::UNION_LEADER_ID               => self::UNION_LEADER,
        self::CORPORATION_LEADER_ID         => self::CORPORATION_LEADER,
        self::MINISTER_OF_DEFENCE_ID        => self::MINISTER_OF_DEFENCE,
        self::FOREIGN_MINISTER_ID           => self::FOREIGN_MINISTER,
        self::PRIME_MINISTER_ID             => self::PRIME_MINISTER,
        self::MINISTER_OF_ECONOMY_ID        => self::MINISTER_OF_ECONOMY,
        self::MINISTER_OF_ENERGY_ID         => self::MINISTER_OF_ENERGY,
        self::MINISTER_OF_INFRASTRUCTURE_ID => self::MINISTER_OF_INFRASTRUCTURE,
        self::MINISTER_OF_HEALTH_ID         => self::MINISTER_OF_HEALTH,
        self::MINISTER_OF_SOCIAL_ID         => self::MINISTER_OF_SOCIAL,
        self::NAVY_LEADER_ID                => self::NAVY_LEADER,
        self::AIR_FORCE_LEADER_ID           => self::AIR_FORCE_LEADER,
        self::GROUND_FORCES_LEADER_ID       => self::GROUND_FORCES_LEADER,
        self::ARMY_LEADER_ID                => self::ARMY_LEADER,
        self::NEWSPAPER_OWNER_ID            => self::NEWSPAPER_OWNER,
        self::NEWSPAPER_SECRETARY_ID        => self::NEWSPAPER_SECRETARY,
        self::NEWSPAPER_EDITOR_ID           => self::NEWSPAPER_EDITOR,
        self::POLITICAL_PARTY_SECRETARY_ID  => self::POLITICAL_PARTY_SECRETARY,
        self::POLITICAL_PARTY_MEMBER_ID     => self::POLITICAL_PARTY_MEMBER,
        self::BUSINESS_OWNER_ID             => self::BUSINESS_OWNER,
        self::BUSINESS_SECRETARY_ID         => self::BUSINESS_SECRETARY,
        self::DEPUTY_ID                     => self::DEPUTY,
        self::EMPLOYEE_ID                   => self::EMPLOYEE,
    ];

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'name',
    ];

    /**
     * @var string[]
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
