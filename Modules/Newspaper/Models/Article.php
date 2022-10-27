<?php

namespace Modules\Newspaper\Models;

use App\Models\Traits\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $user_id
 * @property int|null $newspaper_id
 * @property int|null $category_id
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
    ];

    public function ratings()
    {
        return $this->hasMany(Rating::class, 'article_id');
    }
}
