<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a news category/type.
 *
 * News types classify articles into categories (e.g., university news,
 * events, announcements). Types can be soft-deleted via the is_deleted
 * flag rather than hard deletion, preserving referential integrity
 * with existing news articles.
 *
 * @property int    $id
 * @property string $name_uz     Category name in Uzbek
 * @property string $name_ru     Category name in Russian
 * @property string $name_en     Category name in English
 * @property int    $status      1 = active/visible, 0 = inactive/hidden
 * @property int    $is_deleted  0 = exists, 1 = soft-deleted
 */
class NewwType extends Model
{
    protected $table = 'news_types';

    /**
     * Scope to filter only active (visible) news types.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    /**
     * Scope to filter only non-deleted news types.
     *
     * Used instead of hard deletion to avoid orphaning existing news articles
     * that reference this type.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeIsset($query)
    {
        return $query->where('is_deleted', 0);
    }
}
