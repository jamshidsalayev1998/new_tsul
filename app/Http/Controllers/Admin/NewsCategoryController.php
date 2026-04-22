<?php

namespace App\Http\Controllers\Admin;

use App\Hashtag;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Neww;
use App\NewwType;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

/**
 * Admin controller for managing news categories (types).
 *
 * News categories/types are used to classify news articles.
 * Categories are soft-deleted (is_deleted=1) rather than hard-deleted
 * to preserve referential integrity with existing news articles.
 */
class NewsCategoryController extends Controller
{
    /**
     * Display all non-deleted news categories ordered alphabetically by Uzbek name.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $categories = NewwType::orderBy('name_uz', 'ASC')->isset()->get();
        return view('admin.pages.new_categories.index', [
            'data' => $categories
        ]);
        return $categories;
    }

    /**
     * Soft-delete a news category by setting its is_deleted flag to 1.
     *
     * Soft deletion is used instead of hard deletion to avoid orphaning
     * existing news articles that reference this category.
     *
     * @param int $id The category's primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $category = NewwType::find($id);
        $category->is_deleted = 1;
        $category->update();
        return redirect()->back()->with('success', 'Ma`lumot o`chirildi');
    }

    /**
     * Store a newly created news category.
     *
     * No input validation is applied. New categories are created with
     * is_deleted=0 and status=0 (inactive) by default.
     *
     * @param \Illuminate\Http\Request $request Must contain: name_uz, name_ru, name_en
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $new_category = new NewwType();
        $new_category->name_uz = $request->name_uz;
        $new_category->name_ru = $request->name_ru;
        $new_category->name_en = $request->name_en;
        $new_category->save();
        return redirect()->back()->with('success', 'Ma`lumot saqlandi');
    }

    /**
     * Update an existing news category's multilingual names.
     *
     * @param \Illuminate\Http\Request $request Must contain: name_uz, name_ru, name_en
     * @param int $id The category's primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $category = NewwType::find($id);
        $category->name_uz = $request->name_uz;
        $category->name_ru = $request->name_ru;
        $category->name_en = $request->name_en;
        $category->save();
        return redirect()->back()->with('success', 'Ma`lumot saqlandi');
    }
}
