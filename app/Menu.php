<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a navigation menu item (sidebar/main navigation).
 *
 * Supports a hierarchical structure with parent-child relationships,
 * enabling multi-level dropdown menus. Items can span up to two leap
 * levels (leap = 0 for root, leap = 1 for first-level child, leap = 2
 * for second-level child).
 *
 * @property int         $id
 * @property int|null    $parent_id   Parent menu item ID (null for root items)
 * @property string      $name_uz     Menu label in Uzbek
 * @property string      $name_ru     Menu label in Russian
 * @property string      $name_en     Menu label in English
 * @property string      $url         Target URL or route
 * @property int         $type        1 = basic/standard menu item
 * @property int         $leap        Nesting level: 0 = root, 1 = first child, 2 = second child
 * @property int         $order       Display order among sibling items
 * @property int         $status      1 = active/visible, 0 = inactive/hidden
 */
class Menu extends Model
{
    protected $table = 'menus';

    /**
     * Scope to filter only standard (type=1) menu items.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeBasic($query)
    {
        return $query->where('type', 1);
    }

    /**
     * Scope to filter only active (visible) menu items.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    /**
     * Get direct child menu items ordered by their display order.
     *
     * Returns a collection rather than a relationship because child
     * items are fetched with an explicit ORDER BY clause not available
     * in a standard Eloquent relationship without extra configuration.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function childs()
    {
        $childs = Menu::where('parent_id', $this->id)->orderBy('order', 'ASC')->get();
        return $childs;
    }

    /**
     * Check whether this menu item has any direct children.
     *
     * @return int 1 if children exist, 0 otherwise
     */
    public function has_child()
    {
        if (Menu::where('parent_id', $this->id)->exists()) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * Check whether this menu item has any second-level (leap=2) grandchildren.
     *
     * Used in view templates to determine whether to render a third-level
     * dropdown menu for this parent item.
     *
     * @return int 1 if leap-2 grandchildren exist, 0 otherwise
     */
    public function has_second_leap_child()
    {
        $childs = Menu::where('parent_id', $this->id)->pluck('id');
        if (Menu::where('leap', 2)->whereIn('parent_id', $childs)->exists()) {
            return 1;
        } else {
            return 0;
        }
    }
}
