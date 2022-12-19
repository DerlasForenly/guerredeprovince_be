<?php

namespace Modules\Newspaper\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Settings\Models\Language;
use Modules\User\Models\User;

/**
 * Class Article
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $user_id
 * @property int|null $newspaper_id
 * @property int|null $category_id
 * @property int|null $language_id
 * @property $created_at
 * @property Language $language
 * @property Newspaper $newspaper
 * @property Category $category
 * @property User $user
 * @property $ratings
 * @property Rating $positiveRatings
 * @property Rating $negativeRatings
 */
class Article extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'newspaper_id',
        'category_id',
        'language_id',
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'title'        => 'string',
        'content'      => 'string',
        'newspaper_id' => 'int',
        'category_id'  => 'int',
        'language_id'  => 'int',
    ];

    public function ratings(): HasMany
    {
        return $this->hasMany(Rating::class, 'article_id');
    }

    public function positiveRatings(): HasMany
    {
        return $this
            ->hasMany(Rating::class, 'article_id')
            ->where('value', 1);
    }

    public function negativeRatings(): HasMany
    {
        return $this
            ->hasMany(Rating::class, 'article_id')
            ->where('value', -1);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function newspaper(): BelongsTo
    {
        return $this->belongsTo(Newspaper::class, 'newspaper_id');
    }

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class, 'language_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
