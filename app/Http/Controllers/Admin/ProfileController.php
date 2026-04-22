<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

/**
 * Admin controller for managing the authenticated user's own profile.
 *
 * Provides a self-service password change interface for admin panel users.
 * The current password is verified before the new password is applied,
 * preventing unauthorized password resets if a session is left open.
 */
class ProfileController extends Controller
{
    /**
     * Show the password change form for the authenticated user.
     *
     * @return \Illuminate\View\View
     */
    public function editPassword()
    {
        return view('admin.pages.profile.password');
    }

    /**
     * Update the authenticated user's password.
     *
     * Validates that the new password meets the minimum length requirement
     * and matches the confirmation field. The current password is verified
     * against the stored hash before the update is applied.
     *
     * Side effects:
     * - Updates the User's password field in the database
     *
     * @param \Illuminate\Http\Request $request Must contain: current_password, password, password_confirmation
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Amaldagi parol noto\'g\'ri']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Parol muvaffaqiyatli o\'zgartirildi');
    }
}
