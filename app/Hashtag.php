<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a news hashtag/tag for content categorization.
 *
 * Hashtags are used to tag news articles for filtering and discovery.
 * Only active hashtags (status = 1) are shown to the public.
 *
 * @property int    $id
 * @property string $name_uz  Tag name in Uzbek
 * @property string $name_ru  Tag name in Russian
 * @property string $name_en  Tag name in English
 * @property int    $status   1 = active/visible, 0 = inactive/hidden
 */
class Hashtag extends Model
{
    protected $table = 'hashtags';

    /**
     * Scope to filter only active (visible) hashtags.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
