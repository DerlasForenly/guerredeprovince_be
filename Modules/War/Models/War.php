<?php

namespace Modules\War\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Region\Models\Region;
use Modules\Status\Models\Status;

class War extends Model
{
    use HasFactory;

    protected $fillable = [
        'attacking_region_id',
        'defense_region_id',
        'type',
        'status_id',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        'pivot',
        'status_id',
        'updated_at',
    ];

    protected $appends = [
        'status',
        'attack_points',
        'defense_points',
    ];

    public function regions(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Region::class, 'region_wars');
    }

    public function region_wars(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(RegionWar::class);
    }

    public function status(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public function getStatusAttribute()
    {
        return $this->status()->first()->name;
    }

    public function damages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Damage::class);
    }

    public function getAttackPointsAttribute(): int
    {
        $damages = $this->damages()->where('side_id', '=', 1)->get();
        $total = 0;
        foreach ($damages as $damage) {
            $total += $damage->damage;
        }
        return $total;
    }

    public function getDefensePointsAttribute(): int
    {
        $damages = $this->damages()->where('side_id', '=', 2)->get();
        $total = 0;
        foreach ($damages as $damage) {
            $total += $damage->damage;
        }
        return $total;
    }
}
