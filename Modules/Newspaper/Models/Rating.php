<?php

namespace Modules\Newspaper\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\User\Models\User;

/**
 * Class Rating
 *
 * @property boolean $value
 * @property int $user_id
 * @property int $article_id
 */
class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'user_id',
        'article_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class, 'article_id');
    }
}
