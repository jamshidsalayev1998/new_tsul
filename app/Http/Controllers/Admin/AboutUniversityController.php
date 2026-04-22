<?php

namespace App\Http\Controllers\Admin;

use App\AboutUniversity;
use App\Http\Controllers\Controller;

use App\Menu;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

/**
 * Admin controller for managing the "About the University" page content.
 *
 * The About University record is a singleton — only one row with status=1
 * is expected to exist. The update() method edits that record in place.
 * Supports updating contact details, social media links, descriptions,
 * and the university banner image.
 */
class AboutUniversityController extends Controller
{
    /**
     * Display the About University editing page.
     *
     * Loads the first available record (assumes a single row exists).
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $about = AboutUniversity::first();
        return view('admin.pages.about_university.index', [
            'about' => $about
        ]);
    }

    /**
     * Generate a random alphanumeric string of the given length.
     *
     * Used to create unique filenames for uploaded images to prevent
     * collisions when saving to public/images/about_university/.
     *
     * @param int $c Number of characters to generate
     * @return string Random alphanumeric string
     */
    public function randomPassword($c)
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < $c; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    /**
     * Update the About University record with new content and contact details.
     *
     * Updates all multilingual text fields, social media links, phone numbers,
     * address, and optionally the banner image. Always operates on the active
     * record (status=1). No validation is applied to the input.
     *
     * Side effects:
     * - Optionally writes uploaded image to public/images/about_university/
     * - Updates the AboutUniversity record
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $about = AboutUniversity::where('status', 1)->first();
        $about->name_uz = $request->name_uz;
        $about->name_ru = $request->name_ru;
        $about->name_en = $request->name_en;
        $about->phone = $request->phone;
        $about->email = $request->email;
        $about->address_uz = $request->address_uz;
        $about->address_ru = $request->address_ru;
        $about->address_en = $request->address_en;
        $about->faks = $request->faks;
        $about->twitter = $request->twitter;
        $about->telegram = $request->telegram;
        $about->youtube = $request->youtube;
        $about->instagram = $request->instagram;
        $about->facebook = $request->facebook;
        $about->kommutator_phone = $request->kommutator_phone;
        $about->qabul_phone = $request->qabul_phone;
        $about->ishonch_phone = $request->ishonch_phone;
        $about->map_link = $request->map_link;
        $about->short_description_uz = $request->short_description_uz;
        $about->short_description_ru = $request->short_description_ru;
        $about->short_description_en = $request->short_description_en;
        $about->full_information_uz = $request->full_information_uz;
        $about->full_information_ru = $request->full_information_ru;
        $about->full_information_en = $request->full_information_en;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $full_name = $this->randomPassword(15) . '.' . $ext;
            $file->move(public_path('images/about_university'), $full_name);
            $with_path = 'images/about_university/' . $full_name;
            $about->image = $with_path;
        }
        $about->update();
        return redirect()->back()->with('success', 'Malumot yangilandi');
        return $request;
    }

    /**
     * Store a new About University record (not implemented).
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Request $request)
    {
    }
}
