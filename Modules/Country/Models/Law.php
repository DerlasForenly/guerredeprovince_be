<?php

namespace Modules\Country\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Status\Models\Status;

/**
 * @property int id
 * @property int country_id
 * @property int status_id
 * @property int law_type_id
 * @property string meta
 * @property string $created_at
 *
 * @property \Modules\Country\Models\Country $country
 * @property \Modules\Status\Models\Status $status
 * @property \Modules\Country\Models\LawType $lawType
 * @property \Modules\Country\Models\LawVote[] $votes
 */
class Law extends Model
{
    use Filterable;

    public $timestamps = true;

    protected $fillable = [
        'country_id',
        'status_id',
        'law_type_id',
        'meta',
    ];

    public function lawType(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(LawType::class, 'law_type_id', 'id');
    }

    public function country(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function status(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function votes(): HasMany
    {
        return $this->hasMany(LawVote::class, 'law_id', 'id');
    }
}