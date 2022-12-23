<?php

namespace Modules\Newspaper\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Position\Models\Position;

/**
 * Class Newspaper
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $avatar
 * @property $created_at
 *
 * @property \Modules\Newspaper\Models\Article $articles
 * @property \Modules\Newspaper\Models\NewspaperStaff $staff
 * @property \Modules\Newspaper\Models\NewspaperStaff $owner
 */
class Newspaper extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'description',
        'avatar',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class, 'newspaper_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function staff(): HasMany
    {
        return $this->hasMany(NewspaperStaff::class, 'newspaper_id');
    }

    public function owner(): HasMany
    {
        return $this->hasMany(NewspaperStaff::class, 'newspaper_id')
            ->where('position_id', Position::NEWSPAPER_OWNER_ID);
    }
}
