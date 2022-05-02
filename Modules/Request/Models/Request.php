<?php

namespace Modules\Request\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Country\Models\Country;
use Modules\Region\Models\Region;
use Modules\Request\Database\factories\RequestFactory;
use Modules\User\Models\User;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'country_id',
        'region_id',
        'request_type_id',
        'political_party_id'
    ];

    protected $hidden = [
        'updated_at',
    ];

    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(RequestType::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }
}
