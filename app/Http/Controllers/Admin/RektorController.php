<?php

namespace App\Http\Controllers\Admin;

use App\Announce;
use App\Hashtag;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Neww;
use App\NewwType;
use App\Rektorat;
use App\Rektor;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

/**
 * Admin controller for managing the Rector's profile page.
 *
 * The Rector record is a singleton — only one row with status=1 is shown publicly.
 * The controller provides index (view/edit form) and update operations only.
 * Status is hardcoded to 1 during update regardless of the submitted value,
 * ensuring the active record always remains active after editing.
 *
 * Two photos can be managed: main_image (primary profile photo) and
 * second_image (secondary/banner photo), stored in public/images/rektor/.
 */
class RektorController extends Controller
{
    /**
     * Display the Rector's profile editing page.
     *
     * Loads the active rector record (status=1) and the /rektor menu item
     * for display in the admin panel sidebar breadcrumb.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $rektor = Rektor::where('status', 1)->first();
        $menu = Menu::where('slug', '/rektor')->first();
        return view('admin.pages.rektor.index', [
            'data' => $rektor,
            'menu' => $menu
        ]);
    }

    /**
     * Generate a unique timestamped filename suffix.
     *
     * @param string $name Base name prefix
     * @return string Timestamped filename
     */
    public function file_name($name)
    {
        $name2 = $name . date('s') . '_' . date('i') . '_' . date('h') . '_' . date('d') . '_' . date('m');
        return $name2;
    }

    /**
     * Generate a random lowercase alphabetic string.
     *
     * @param int $count Number of characters to generate
     * @return string Random alphabetic string
     */
    public function randomPassword_alpha($count)
    {
        $alphabet = 'abcdefghjkmnpqrstuvwxyz';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < $count; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    /**
     * Update the Rector's profile content and photos.
     *
     * Updates all multilingual biographical fields (word, short info, biography,
     * duties, reception days), contact details (phone, email), social links, and
     * optionally replaces either or both profile photos.
     *
     * Note: status is forced to 1 after update regardless of the submitted status
     * value — this prevents accidentally deactivating the rector record.
     *
     * Side effects:
     * - Optionally writes main_image and/or second_image to public/images/rektor/
     * - Updates the Rektor record
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id The rector record's primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $rek = Rektor::find($id);
        $rek->main_rektor_word_uz = $request->main_rektor_word_uz;
        $rek->main_rektor_word_ru = $request->main_rektor_word_ru;
        $rek->main_rektor_word_en = $request->main_rektor_word_en;
        $rek->short_info_uz = $request->short_info_uz;
        $rek->short_info_ru = $request->short_info_ru;
        $rek->short_info_en = $request->short_info_en;
        $rek->biography_uz = $request->biography_uz;
        $rek->biography_ru = $request->biography_ru;
        $rek->biography_en = $request->biography_en;
        $rek->duties_uz = $request->duties_uz;
        $rek->duties_ru = $request->duties_ru;
        $rek->duties_en = $request->duties_en;
        $rek->reception_days_uz = $request->reception_days_uz;
        $rek->reception_days_ru = $request->reception_days_ru;
        $rek->reception_days_en = $request->reception_days_en;
        $rek->full_name_uz = $request->full_name_uz;
        $rek->full_name_ru = $request->full_name_ru;
        $rek->full_name_en = $request->full_name_en;
        $rek->status = $request->status;
        $rek->linkedin = $request->linkedin;
        $rek->facebook = $request->facebook;
        $rek->twitter = $request->twitter;
        $rek->email = $request->email;
        $rek->phone = $request->phone;
        // Force status to 1 to prevent accidentally deactivating the singleton record
        $rek->status = 1;
        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $file_ext = $file->getClientOriginalExtension();
            $new_name = $this->file_name($this->randomPassword_alpha(10)) . '.' . $file_ext;
            $file->move(public_path() . '/images/rektor', $new_name);
            $rek->main_image = 'images/rektor/' . $new_name;
        }
        if ($request->hasFile('second_image')) {
            $file = $request->file('second_image');
            $file_ext = $file->getClientOriginalExtension();
            $new_name = $this->file_name($this->randomPassword_alpha(10)) . '.' . $file_ext;
            $file->move(public_path() . '/images/rektor', $new_name);
            $rek->second_image = 'images/rektor/' . $new_name;
        }
        $rek->save();
        return redirect()->back()->with('success', 'Malumot saqlandi');
    }
}
