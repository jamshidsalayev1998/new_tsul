<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\KafedraAdmin;
use App\Media;
use App\Menu;
use App\Section;
use App\AdministrationSection;
use App\SliderImage;
use App\SliderText;
use App\Kafedra;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

/**
 * Admin controller for managing department administrator accounts.
 *
 * Creating a KafedraAdmin simultaneously creates a linked User account
 * with the 'kafedra-admin' role, a generated username, and a random password
 * displayed once to the super-admin for handoff. Deleting a KafedraAdmin
 * also deletes the associated User account.
 *
 * Security note: the plain-text password is stored in the KafedraAdmin.pass
 * field for display purposes — this is a known security concern.
 */
class KafedraAdminController extends Controller
{
    /**
     * Generate a random numeric string of the given length.
     *
     * Uses digits 1–9 (excludes 0 to avoid ambiguity). Used to produce
     * the numeric suffix for auto-generated usernames and plain-text passwords.
     *
     * @param int $length Number of digits to generate
     * @return string Random numeric string
     */
    public function generateRandomString($length)
    {
        $characters = '123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * Display a list of all department administrators with their assigned departments.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $admins = KafedraAdmin::all();
        $kafedra = Kafedra::all();
//        return $admins;
        return view('admin.pages.kafedra_admin.index', [
            'data' => $admins,
            'kafedra' => $kafedra
        ]);
    }

    /**
     * Create a new department administrator and their linked user account.
     *
     * Creates two records atomically (no DB transaction):
     * 1. KafedraAdmin with the given full name and department
     * 2. User account with auto-generated username (kaf{kafedra_id}_{3 digits}),
     *    a 6-digit random password, and role=1 (legacy numeric role field)
     *
     * The plain-text password is stored in KafedraAdmin.pass for super-admin
     * reference. Note: Validator::make() is called without ->validate() so
     * validation errors are silently ignored — this is a known bug.
     *
     * Side effects:
     * - Creates a KafedraAdmin record
     * - Creates a User record with email set to the placeholder 'sd'
     *
     * @param \Illuminate\Http\Request $request Must contain: fio, kafedra_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        return $request;

        Validator::make($request->all(), [
            'fio' => ['required', 'string'],
            'kafedra_id' => ['required', 'exists:kafedra,id']
        ]);
        $new_admin = new KafedraAdmin();
        $new_admin->fio = $request->fio;
        $new_admin->kafedra_id = $request->kafedra_id;
        $new_admin->save();
        $new_user = new User();
        $new_user->name = $request->fio;
        $new_user->email = 'sd'; // Placeholder — should be a valid unique email
        $new_user->role = 1;
        $new_user->username = 'kaf' . $request->kafedra_id . '_' . $this->generateRandomString(3);
        $password = $this->generateRandomString(6);
        $new_user->password = Hash::make($password);
        $new_user->save();
        $new_admin->pass = $password; // Store plain-text for one-time display to super-admin
        $new_admin->user_id = $new_user->id;
        $new_admin->update();
        return redirect()->back()->with('success', 'Malumot qoshildi');
    }

    /**
     * Delete a department administrator and their linked user account.
     *
     * Deletes the associated User record first to avoid orphaned accounts.
     * If no linked user is found, deletion proceeds for the admin record only.
     *
     * Side effects:
     * - Deletes the User record (if found)
     * - Deletes the KafedraAdmin record
     *
     * @param int $id The KafedraAdmin record's primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $admin = KafedraAdmin::find($id);
        if ($admin) {
            $user = User::find($admin->user_id);
            if ($user) {
                $user->delete();
            }
            $admin->delete();
        }
        return redirect()->back()->with('success', 'Malumot ochirildi');
    }
}
