<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a top navigation bar menu item.
 *
 * Mirrors the structure of the Menu model but for the top navigation bar
 * (header navigation), separate from the sidebar/main navigation.
 * Supports hierarchical multi-level menus with up to two leap levels.
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
class MenuTop extends Model
{
    protected $table = 'menus_top';

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
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function childs()
    {
        $childs = MenuTop::where('parent_id', $this->id)->orderBy('order', 'ASC')->get();
        return $childs;
    }

    /**
     * Check whether this menu item has any direct children.
     *
     * @return int 1 if children exist, 0 otherwise
     */
    public function has_child()
    {
        if (MenuTop::where('parent_id', $this->id)->exists()) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * Check whether this menu item has any second-level (leap=2) grandchildren.
     *
     * Used in view templates to determine whether to render a third-level
     * dropdown for this item in the top navigation bar.
     *
     * @return int 1 if leap-2 grandchildren exist, 0 otherwise
     */
    public function has_second_leap_child()
    {
        $childs = MenuTop::where('parent_id', $this->id)->pluck('id');
        if (MenuTop::where('leap', 2)->whereIn('parent_id', $childs)->exists()) {
            return 1;
        } else {
            return 0;
        }
    }
}
