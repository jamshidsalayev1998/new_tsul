<?php

namespace App\Http\Controllers\Admin;

use App\Announce;
use App\Hashtag;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Neww;
use App\NewwType;
use App\SeperatelyOneNew;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

/**
 * Admin controller for managing university announcements.
 *
 * Announcements are similar to news but are typically shorter-lived
 * notices. Image handling follows the same locale-fallback pattern
 * as NewwController (UZ image cascades to RU/EN if not provided separately).
 *
 * Note: the date field in store() is always overridden to today's date
 * regardless of what the user submits — the date input from the form is
 * effectively ignored. This appears to be a bug.
 */
class AnnouncesController extends Controller
{
    /**
     * Display all announcements.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $news = Announce::all();
        return view('admin.pages.announces.index', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for creating a new announcement.
     *
     * Loads all news types and hashtags for the form selectors.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $types = NewwType::all();
        $hashtags = Hashtag::all();
        return view('admin.pages.announces.create', [
            'types' => $types,
            'hashtags' => $hashtags
        ]);
    }

    /**
     * Generate a timestamped filename (currently unused — returns void instead of string).
     *
     * Note: this method has a bug — it assigns to $name but does not return it.
     *
     * @param string $name Base name
     * @return void
     */
    public function file_name($name)
    {
        $name = date('s') . '_' . date('i') . '_' . date('h') . '_' . date('d') . '_' . date('m');
    }

    /**
     * Show the edit form for an existing announcement.
     *
     * @param int $id The announcement's primary key
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $types = NewwType::all();
        $hashtags = Hashtag::all();
        $new = Announce::find($id);
        return view('admin.pages.announces.edit', [
            'types' => $types,
            'hashtags' => $hashtags,
            'data' => $new
        ]);
    }

    /**
     * Store a newly created announcement.
     *
     * Note: the date is always set to today (date('Y-m-d')) regardless of
     * the submitted date value — the conditional date assignment above it
     * is immediately overridden. This appears to be an unintentional bug.
     *
     * Image handling: UZ image cascades to RU/EN; each locale image
     * can be individually overridden. Falls back to default image if none uploaded.
     *
     * Side effects:
     * - Writes uploaded images to public/images/news/
     * - Creates an Announce record
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        return $request;
        $new = new Announce();
        $new->content_uz = $request->content_uz;
        $new->content_ru = $request->content_ru;
        $new->content_en = $request->content_en;
        $new->title_uz = $request->title_uz;
        $new->title_ru = $request->title_ru;
        $new->title_en = $request->title_en;
        $new->short_info_uz = $request->short_info_uz;
        $new->short_info_ru = $request->short_info_ru;
        $new->short_info_en = $request->short_info_en;
        $new->event = $request->event;
        if ($request->date) {

            $new->date = $request->date;
        }
        // Note: this always overrides the date set above — request date is effectively ignored
        $new->date = date('Y-m-d');
        $new->type_id = $request->type_id;
        if (isset($request->hashtags)) {

        }
        $has_image = 0;
        if ($request->hasFile('image_uz')) {
            $file = $request->file('image_uz');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path() . '/images/news', $file_name);
            $new->image_uz = 'images/news/' . $file_name;
            $new->image_ru = 'images/news/' . $file_name;
            $new->image_en = 'images/news/' . $file_name;
            $has_image = 1;
        }
        if ($request->hasFile('image_ru')) {
            $file = $request->file('image_ru');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path() . '/images/news', $file_name);
            if ($new->image_uz == null) {
                $new->image_uz = 'images/news/' . $file_name;
            }
            $new->image_ru = 'images/news/' . $file_name;
            $new->image_en = 'images/news/' . $file_name;
            $has_image = 1;
        }
        if ($request->hasFile('image_en')) {
            $file = $request->file('image_en');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path() . '/images/news', $file_name);
            if ($new->image_uz == null) {
                $new->image_uz = 'images/news/' . $file_name;
            }
            if ($new->image_ru == null) {
                $new->image_ru = 'images/news/' . $file_name;
            }
            $new->image_en = 'images/news/' . $file_name;
            $has_image = 1;
        }
        if (!$has_image) {
            $new->image_uz = '/images/default-news-image.png';
            $new->image_ru = '/images/default-news-image.png';
            $new->image_en = '/images/default-news-image.png';
        }
        $new->save();
        return redirect()->back()->with('success', 'Malumot saqlandi');
        return $request;
    }

    /**
     * Update an existing announcement.
     *
     * Unlike store(), the date is taken directly from the request on update.
     * Each locale image is only updated if a new file is uploaded for it.
     *
     * Side effects:
     * - Optionally writes updated images to public/images/news/
     * - Updates the Announce record
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id The announcement's primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $new = Announce::find($id);
        $new->content_uz = $request->content_uz;
        $new->content_ru = $request->content_ru;
        $new->content_en = $request->content_en;
        $new->title_uz = $request->title_uz;
        $new->title_ru = $request->title_ru;
        $new->title_en = $request->title_en;
        $new->short_info_uz = $request->short_info_uz;
        $new->short_info_ru = $request->short_info_ru;
        $new->short_info_en = $request->short_info_en;
        $new->event = $request->event;
        $new->date = $request->date;
        $new->type_id = $request->type_id;
        if (isset($request->hashtags)) {

        }
        if ($request->hasFile('image_uz')) {
            $file = $request->file('image_uz');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path() . '/images/news', $file_name);
            $new->image_uz = 'images/news/' . $file_name;
            $has_image = 1;
        }
        if ($request->hasFile('image_ru')) {
            $file = $request->file('image_ru');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path() . '/images/news', $file_name);

            $new->image_ru = 'images/news/' . $file_name;
            $has_image = 1;
        }
        if ($request->hasFile('image_en')) {
            $file = $request->file('image_en');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path() . '/images/news', $file_name);

            $new->image_en = 'images/news/' . $file_name;
            $has_image = 1;
        }

        $new->update();
        return redirect()->back()->with('success', 'Malumot ozgartirildi');
        return $request;
    }

    /**
     * Delete an announcement by ID from the request body.
     *
     * @param \Illuminate\Http\Request $request Must contain 'id'
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $news = Announce::find($request->id);
        $news->delete();
        return redirect()->back()->with('success', 'Malumot ochirildi');
        return $request;
    }
}
