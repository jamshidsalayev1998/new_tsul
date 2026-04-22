<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing the pivot/tag relationship between news and hashtags.
 *
 * Associates news articles with hashtag records for filtering and
 * topical grouping. Only active tags (status = 1) are shown publicly.
 *
 * @property int    $id
 * @property int    $news_id     Foreign key to the news table
 * @property int    $hashtag_id  Foreign key to the hashtags table
 * @property int    $status      1 = active/visible, 0 = inactive/hidden
 */
class NewwHashtag extends Model
{
    protected $table = 'news_hashtags';

    /**
     * Scope to filter only active news-hashtag associations.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
