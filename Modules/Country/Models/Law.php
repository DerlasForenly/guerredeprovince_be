<?php

namespace Modules\Country\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property int country_id
 * @property int status_id
 * @property int law_type_id
 * @property string meta
 *
 * @property \Modules\Country\Models\Country country
 *
 * @property \Modules\Country\Models\LawType lawType
 */
class Law extends Model
{
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
}