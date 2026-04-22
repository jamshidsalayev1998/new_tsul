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
 * Admin controller for managing news articles.
 *
 * Handles full CRUD operations for multilingual news content (UZ/RU/EN).
 * Supports per-locale image uploads; if only one locale image is provided,
 * it is used as a fallback for the others. Empty CKEditor artifacts are
 * stripped before validation to prevent false required-field failures.
 *
 * Images are stored in public/images/news/ using the original filename
 * (no uniqueness guarantee — uploading the same filename will overwrite).
 *
 * Note: several methods contain unreachable `return $request` statements
 * that are legacy debugging artifacts.
 */
class NewwController extends Controller
{
    /**
     * Display all news articles ordered by date descending.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $news = Neww::orderBy('date', 'DESC')->get();
        return view('admin.pages.news.index', [
            'news' => $news
        ]);
    }

    /**
     * Show the form for creating a new news article.
     *
     * Loads only non-deleted news types and all available hashtags
     * for the dropdown and tag selectors.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $types = NewwType::isset()->get();
        $hashtags = Hashtag::all();
        return view('admin.pages.news.create', [
            'types' => $types,
            'hashtags' => $hashtags
        ]);
    }

    /**
     * Generate a timestamped filename suffix for file uploads.
     *
     * @param string $name Base name to append timestamp to
     * @return string Timestamped filename
     */
    public function file_name($name)
    {
        $name2 = $name . date('s') . '_' . date('i') . '_' . date('h') . '_' . date('d') . '_' . date('m');
        return $name2;
    }

    /**
     * Show the edit form for an existing news article.
     *
     * @param int $id The news article's primary key
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $types = NewwType::isset()->get();
        $hashtags = Hashtag::all();
        $new = Neww::find($id);
        return view('admin.pages.news.edit', [
            'types' => $types,
            'hashtags' => $hashtags,
            'data' => $new
        ]);
    }

    /**
     * Store a newly created news article in the database.
     *
     * Pre-processes CKEditor empty paragraph placeholders, replacing them
     * with null before validation runs. Image handling cascades: if only
     * image_uz is provided it is used for all three locales; image_ru and
     * image_en can independently override their respective locale images.
     * Falls back to a default image when no locale image is uploaded.
     *
     * Side effects:
     * - Writes uploaded images to public/images/news/
     * - Creates a new Neww record
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //        return $request;
        $request_array = $request->all();
        // Replace CKEditor empty paragraph artifacts with null so required validation works correctly
        foreach ($request_array as $key => $value) {
            if ($value == "<p><br data-cke-filler=\"true\"></p>") {
                $request_array[$key] = null;
            }
        }
        $request->merge($request_array);
        $request->validate([
            'content_uz' => ['required'],
            'content_ru' => ['required'],
            'content_en' => ['required'],
            'title_uz' => ['required', 'string', 'max:255'],
            'title_ru' => ['required', 'string', 'max:255'],
            'title_en' => ['required', 'string', 'max:255'],
            'short_info_uz' => ['required'],
            'short_info_ru' => ['required'],
            'short_info_en' => ['required'],
            'date' => ['required', 'date'],
            'type_id' => ['required'],
            'image_uz' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'image_ru' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'image_en' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        $new = new Neww();
        $new->content_uz = $request->content_uz;
        $new->content_ru = $request->content_ru;
        $new->content_en = $request->content_en;
        $new->title_uz = $request->title_uz;
        $new->title_ru = $request->title_ru;
        $new->title_en = $request->title_en;
        $new->short_info_uz = $request->short_info_uz;
        $new->short_info_ru = $request->short_info_ru;
        $new->short_info_en = $request->short_info_en;
        $new->date = $request->date;
        $new->type_id = $request->type_id;
        if (isset($request->hashtags)) {

        }
        $has_image = 0;
        // UZ image is used as the base fallback for all locales
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
        // Use a generic default image when no locale-specific image was uploaded
        if (!$has_image) {
            $new->image_uz = 'images/default-news-image.png';
            $new->image_ru = 'images/default-news-image.png';
            $new->image_en = 'images/default-news-image.png';
        }
        $new->save();
        return redirect(route('admin.neww.index'))->with('success', 'Malumot saqlandi');
        return $request;
    }

    /**
     * Update an existing news article.
     *
     * Same CKEditor sanitization and image handling as store(). Unlike store(),
     * missing locale images on update do NOT fall back to other locales —
     * each locale image is only updated if explicitly uploaded.
     *
     * Side effects:
     * - Optionally writes updated images to public/images/news/
     * - Updates the Neww record
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id The news article's primary key
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        //        return $request;
        $request_array = $request->all();
        foreach ($request_array as $key => $value) {
            if ($value == "<p><br data-cke-filler=\"true\"></p>") {
                $request_array[$key] = null;
            }
        }
        $request->merge($request_array);
        $request->validate([
            'content_uz' => ['required'],
            'content_ru' => ['required'],
            'content_en' => ['required'],
            'title_uz' => ['required', 'string', 'max:255'],
            'title_ru' => ['required', 'string', 'max:255'],
            'title_en' => ['required', 'string', 'max:255'],
            'short_info_uz' => ['required'],
            'short_info_ru' => ['required'],
            'short_info_en' => ['required'],
            'date' => ['required', 'date'],
            'type_id' => ['required'],
            'image_uz' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'image_ru' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'image_en' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        $new = Neww::find($id);
        $new->content_uz = $request->content_uz;
        $new->content_ru = $request->content_ru;
        $new->content_en = $request->content_en;
        $new->title_uz = $request->title_uz;
        $new->title_ru = $request->title_ru;
        $new->title_en = $request->title_en;
        $new->short_info_uz = $request->short_info_uz;
        $new->short_info_ru = $request->short_info_ru;
        $new->short_info_en = $request->short_info_en;
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
        return redirect(route('admin.neww.index'))->with('success', 'Malumot ozgartirildi');
        return $request;
    }

    /**
     * Delete a news article by its ID passed in the request body.
     *
     * Note: the ID is taken from the request body (not the URL), which is
     * unusual for a destroy action — the old image file is NOT deleted from disk.
     *
     * @param \Illuminate\Http\Request $request Must contain 'id' field
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $news = Neww::find($request->id);
        $news->delete();
        return redirect()->back()->with('success', 'Malumot ochirildi');
        return $request;
    }

    /**
     * Toggle the published status of a news article (0 ↔ 1).
     *
     * Called via AJAX from the admin list view. Returns the new status
     * value (0 or 1) as a plain integer response, not JSON.
     *
     * @param int $id The news article's primary key
     * @return int|null New status value (0 or 1), or null if not found
     */
    public function change_status($id)
    {
        $new = Neww::find($id);
        if ($new) {
            if ($new->status) {
                $new->status = 0;
                $new->update();
                return 0;
            } else {
                $new->status = 1;
                $new->update();
                return 1;
            }
        }
    }
}
