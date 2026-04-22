<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Menu;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * Admin controller for managing the navigation menu structure.
 *
 * Menus are hierarchical with up to 3 levels (leap 0, 1, 2). Root items
 * have leap=0 and no parent. The controller supports viewing nested levels,
 * toggling item visibility, renaming items, adding/removing items, and
 * reordering via move_up/move_down which perform order-swap logic.
 *
 * The 'order' field defaults to the item's ID on creation and is swapped
 * with an adjacent item's order value to move items up or down.
 */
class MenuController extends Controller
{
    /**
     * Display all root-level (leap=0) menu items.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
//        return "D";
        $menus = Menu::where('leap', 0)->get();
        $leap = 0;
        $parent_id = null;
        return view('admin.pages.menu.index', [
            'menus' => $menus,
            'leap' => $leap,
            'parent_id' => $parent_id
        ]);
    }

    /**
     * Display the children of a given menu item (drill-down navigation).
     *
     * Loads items at leap+1 with the given item as parent, allowing
     * the admin to navigate into sub-menus level by level.
     *
     * @param int $id The parent menu item's primary key
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
//        return "D";
        $one = Menu::find($id);
        $menus = Menu::where('leap', $one->leap + 1)->where('parent_id', $one->id)->orderBy('order', 'ASC')->get();
        $leap = $one->leap + 1;
        $parent_id = $one->id;
//        return $leap;
        return view('admin.pages.menu.show', [
            'menus' => $menus,
            'leap' => $leap,
            'parent_id' => $parent_id,
            'parent' => $one
        ]);
    }

    /**
     * Toggle the visibility (status) of a menu item via AJAX.
     *
     * Flips status between 0 (hidden) and 1 (visible) and returns
     * the menu item's ID as a plain response (used for AJAX confirmation).
     *
     * @param \Illuminate\Http\Request $request Must contain 'menu_id'
     * @return int The menu item's ID
     */
    public function change_eye_menu(Request $request)
    {
        $menu = Menu::find($request->menu_id);
        if ($menu->status == 1) {
            $menu->status = 0;
        } else {
            $menu->status = 1;
        }
        $menu->update();
        return $request->menu_id;
    }

    /**
     * Update the multilingual name of a menu item inline.
     *
     * Used for quick inline editing of menu labels without opening a full edit form.
     *
     * @param \Illuminate\Http\Request $request Must contain: name_uz, name_ru, name_en
     * @param int $id The menu item's primary key
     * @return \Illuminate\Http\RedirectResponse|null Returns null (implicit) if not found
     */
    public function change_name_menu(Request $request, $id)
    {
        $menu = Menu::find($id);
        if ($menu) {
            $menu->name_uz = $request->name_uz;
            $menu->name_ru = $request->name_ru;
            $menu->name_en = $request->name_en;
            $menu->update();
            return redirect()->back()->with('success', 'Malumot o`zgartirildi');
        }
    }

    /**
     * Add a new menu item under the specified parent.
     *
     * New items are created as dynamically-added (dynamik=1), active (status=1),
     * with order initially set to the item's own ID (assigned after save).
     * This ensures new items appear at the end of their sibling group.
     *
     * @param \Illuminate\Http\Request $request Must contain: parent_id, leap, name_uz, name_ru, name_en
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'parent_id' => ['required'],
            'leap' => ['required'],
            'name_uz' => ['required'],
            'name_ru' => ['required'],
            'name_en' => ['required'],
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $menu = new Menu();
        $menu->name_uz = $request->name_uz;
        $menu->name_ru = $request->name_ru;
        $menu->name_en = $request->name_en;
        $menu->leap = $request->leap;
        $menu->parent_id = $request->parent_id;
        $menu->dynamik = 1;
        $menu->type = 1;
        $menu->status = 1;
        $menu->save();
        // Use the auto-incremented ID as the initial order value
        $menu->order = $menu->id;
        $menu->update();
        return redirect()->back()->with('success', 'Menyu qo`shildi');
//        return $request;
    }

    /**
     * Update a menu item's multilingual names.
     *
     * @param \Illuminate\Http\Request $request Must contain: name_uz, name_ru, name_en
     * @param int $id The menu item's primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        $menu->name_uz = $request->name_uz;
        $menu->name_ru = $request->name_ru;
        $menu->name_en = $request->name_en;
        $menu->update();
        return redirect()->back()->with('success', 'Malumot ozgartirildi');
    }

    /**
     * Delete a menu item by ID passed in the request body.
     *
     * Note: ID is taken from the request body, not the URL parameter.
     * Child menu items are NOT deleted — their parent_id will become a
     * dangling reference.
     *
     * @param \Illuminate\Http\Request $request Must contain 'id'
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Request $request)
    {
        $menu = Menu::find($request->id);
        $menu->delete();
//        return $menu;
        return redirect()->back()->with('success', 'Malumot ochirildi');
    }

    /**
     * Move a menu item one position up by swapping its order with the previous sibling.
     *
     * Finds the nearest sibling with a lower order value (same status, leap, and parent)
     * and swaps their order fields. If no upper sibling exists, does nothing.
     *
     * @param int $id The menu item's primary key
     * @return \Illuminate\Http\RedirectResponse|null Returns null (implicit) if not found
     */
    public function move_up($id)
    {
        $menu = Menu::find($id);
        if ($menu) {
            $upper = Menu::where('status', $menu->status)->where('leap', $menu->leap)->where('parent_id', $menu->parent_id)->where('order', '<', $menu->order)->orderBy('order', 'DESC')->get();
            if (count($upper)) {
                $upper_one = $upper[0];
                $lll = $upper_one->order;
                $upper_one->order = $menu->order;
                $menu->order = $lll;
                $upper_one->update();
                $menu->update();
                return redirect()->back();
            } else {
                return redirect()->back();
            }
        }
    }

    /**
     * Move a menu item one position down by swapping its order with the next sibling.
     *
     * Finds the nearest sibling with a higher order value (same status, leap, and parent)
     * and swaps their order fields. If no lower sibling exists, does nothing.
     *
     * @param int $id The menu item's primary key
     * @return \Illuminate\Http\RedirectResponse|null Returns null (implicit) if not found
     */
    public function move_down($id)
    {
        $menu = Menu::find($id);
        if ($menu) {
            $upper = Menu::where('status', $menu->status)->where('leap', $menu->leap)->where('parent_id', $menu->parent_id)->where('order', '>', $menu->order)->orderBy('order', 'ASC')->get();
            if (count($upper)) {
                $upper_one = $upper[0];
                $lll = $upper_one->order;
                $upper_one->order = $menu->order;
                $menu->order = $lll;
                $upper_one->update();
                $menu->update();
                return redirect()->back();
            } else {
                return redirect()->back();
            }
        }
    }
}
