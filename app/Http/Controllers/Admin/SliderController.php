<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\SliderImage;
use App\SeperatelyOneNew;
use App\SliderText;
use Illuminate\Http\Request;

/**
 * Admin controller for managing the homepage hero slider and featured content.
 *
 * Handles slider image CRUD (per-locale images: UZ/RU/EN) and management
 * of the "separately featured" news item shown below or alongside the slider.
 * Images are stored in public/front_assets/assets/slider_images/.
 *
 * Note: image_uz is used as the fallback for all locales during store()
 * if locale-specific images are not uploaded separately.
 */
class SliderController extends Controller
{
    /**
     * Display the slider management page with all slider images and active text.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $slider_images = SliderImage::all();
        $slider_text = SliderText::where('status', 1)->first();
        return view('admin.pages.slider.index', [
            'slider_images' => $slider_images,
            'slider_texts' => $slider_text
        ]);
    }

    /**
     * Legacy version of the slider index (duplicate of index(), kept for backwards compatibility).
     *
     * @return \Illuminate\View\View
     */
    public function index_old()
    {
        $slider_images = SliderImage::all();
        $slider_text = SliderText::where('status', 1)->first();
        return view('admin.pages.slider.index', [
            'slider_images' => $slider_images,
            'slider_texts' => $slider_text
        ]);
    }

    /**
     * Store a new slider image with per-locale images and optional text overlays.
     *
     * If only image_uz is uploaded, its path is reused for image_ru and image_en.
     * If image_ru or image_en are also uploaded, they override the fallback path.
     * Validation is currently empty (commented out).
     *
     * Side effects:
     * - Writes uploaded image files to public/front_assets/assets/slider_images/
     * - Creates a new SliderImage record
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
//            'image_uz' => ['required' , 'file']
        ]);
        $new_slide = new SliderImage();
        if ($request->text_uz) $new_slide->text_uz = $request->text_uz;
        if ($request->text_ru) $new_slide->text_ru = $request->text_ru;
        if ($request->text_en) $new_slide->text_en = $request->text_en;

        $new_slide->link_uz = $request->link_uz;
        $new_slide->link_ru = $request->link_uz;
        $new_slide->link_en = $request->link_uz;
        if ($request->text_ru) $new_slide->text_ru = $request->text_ru;
        if ($request->text_en) $new_slide->text_en = $request->text_en;
        $path = '';
        if ($request->hasFile('image_uz')) {
            $file = $request->file('image_uz');
            $file_name = $file->getClientOriginalName();
            $file->move('front_assets/assets/slider_images', $file_name);
            $path = 'front_assets/assets/slider_images/' . $file_name;
        }
        $new_slide->image_uz = $path;
        if ($request->hasFile('image_ru')) {
            $file = $request->file('image_ru');
            $file_name = $file->getClientOriginalName();
            $file->move('front_assets/assets/slider_images', $file_name);
            $path = 'front_assets/assets/slider_images/' . $file_name;
        }
        $new_slide->image_ru = $path;
        if ($request->hasFile('image_en')) {
            $file = $request->file('image_en');
            $file_name = $file->getClientOriginalName();
            $file->move('front_assets/assets/slider_images', $file_name);
            $path = 'front_assets/assets/slider_images/' . $file_name;
        }
        $new_slide->image_en = $path;
        $new_slide->save();
        return redirect(route('admin.slider.index'))->with('success', 'Malumot saqlandi');
    }

    /**
     * Update the active slider text overlay (headline, subtitle, contact info).
     *
     * Finds the currently active SliderText record and updates its fields.
     * Only one SliderText record with status=1 is expected to exist.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store_old(Request $request)
    {
        $text = SliderText::where('status', 1)->first();
        $text->text_uz = $request->text_uz;
        $text->text_ru = $request->text_ru;
        $text->text_en = $request->text_en;
        $text->email = $request->email;
        $text->phone = $request->phone;
        $text->link = $request->link;
        $text->update();
        return redirect()->back()->with('success', 'Saqlandi');
    }

    /**
     * Display the "separately featured news" management page.
     *
     * If an active featured item exists, it is loaded for editing.
     * Otherwise, a new empty instance is passed to the view with has=0
     * so the form knows to create rather than update.
     *
     * @return \Illuminate\View\View
     */
    public function separately_index()
    {
        $has = 0;
        if (SeperatelyOneNew::where('status', 1)->orderBy('id', 'DESC')->exists()) {
            $sep = SeperatelyOneNew::where('status', 1)->orderBy('id', 'DESC')->first();
            $has = 1;
        } else {
            $sep = new SeperatelyOneNew();
        }
        return view('admin.pages.separately.index', [
            'data' => $sep,
            'has' => $has
        ]);
    }

    /**
     * Create or update the "separately featured news" item.
     *
     * If request->has is truthy, updates the existing record identified by data_id.
     * Otherwise creates a new record. Always sets status=1 (active).
     *
     * Side effects:
     * - Creates or updates a SeperatelyOneNew record
     *
     * @param \Illuminate\Http\Request $request Must contain: has, data_id (if updating), title_*, content_*
     * @return \Illuminate\Http\RedirectResponse
     */
    public function separately_store(Request $request)
    {
        if ($request->has) {
            $sep = SeperatelyOneNew::find($request->data_id);
        } else {
            $sep = new SeperatelyOneNew();
        }
//        return $sep;
        $sep->status = 1;
        $sep->title_uz = $request->title_uz;
        $sep->title_ru = $request->title_ru;
        $sep->title_en = $request->title_en;
        $sep->content_uz = $request->content_uz;
        $sep->content_ru = $request->content_ru;
        $sep->content_en = $request->content_en;
        $sep->save();
        return redirect()->back()->with('success', 'Malumot qoshildi');
    }

    /**
     * Show the edit form for an existing slider image.
     *
     * @param int $id The SliderImage's primary key
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $slider_image = SliderImage::find($id);

        return view('admin.pages.slider.edit', [
            'data' => $slider_image
        ]);
        return $slider_image;
    }

    /**
     * Show the form for uploading a new slider image.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pages.slider.create');
    }

    /**
     * Delete a slider image record.
     *
     * Note: the actual image file is NOT deleted from disk.
     *
     * @param int $id The SliderImage's primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $slider_image = SliderImage::find($id);
        $slider_image->delete();
        return redirect()->back()->with('success', 'Malumot ochirildi');
    }

    /**
     * Update an existing slider image's text overlays and locale images.
     *
     * Each locale image path is preserved from the existing record unless
     * a new file is uploaded for that locale, allowing partial updates.
     *
     * Side effects:
     * - Optionally writes new image files to public/front_assets/assets/slider_images/
     * - Updates the SliderImage record
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id The SliderImage's primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
//            'image_uz' => ['required' , 'file']
        ]);
        $new_slide = SliderImage::find($id);
        $new_slide->text_uz = $request->text_uz;
        $new_slide->text_ru = $request->text_ru;
        $new_slide->text_en = $request->text_en;

        $new_slide->link_uz = $request->link_uz;
        $new_slide->link_ru = $request->link_ru;
        $new_slide->link_en = $request->link_en;
        // Preserve existing path as default; only replace if a new file is uploaded
        $path = $new_slide->image_uz;
        if ($request->hasFile('image_uz')) {
            $file = $request->file('image_uz');
            $file_name = $file->getClientOriginalName();
            $file->move('front_assets/assets/slider_images', $file_name);
            $path = 'front_assets/assets/slider_images/' . $file_name;
        }
        $new_slide->image_uz = $path;
        $path = $new_slide->image_ru;
        if ($request->hasFile('image_ru')) {
            $file = $request->file('image_ru');
            $file_name = $file->getClientOriginalName();
            $file->move('front_assets/assets/slider_images', $file_name);
            $path = 'front_assets/assets/slider_images/' . $file_name;
        }
        $new_slide->image_ru = $path;
        $path = $new_slide->image_en;
        if ($request->hasFile('image_en')) {
            $file = $request->file('image_en');
            $file_name = $file->getClientOriginalName();
            $file->move('front_assets/assets/slider_images', $file_name);
            $path = 'front_assets/assets/slider_images/' . $file_name;
        }
        $new_slide->image_en = $path;
        $new_slide->update();
        return redirect(route('admin.slider.index'))->with('success', 'Malumot saqlandi');
    }
}
