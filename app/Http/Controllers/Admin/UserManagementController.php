<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

/**
 * Admin controller for managing system user accounts.
 *
 * Provides super-admin level access to create, update, delete, and
 * reset passwords for admin panel users. Role assignment is handled
 * via Spatie's permission package (syncRoles).
 *
 * Password reset generates a random 10-character plain-text password
 * displayed once to the admin for manual handoff — it is not emailed.
 */
class UserManagementController extends Controller
{
    /**
     * Display a paginated list of all system users with their roles.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::with('roles')->paginate(20);
        return view('admin.pages.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     *
     * Loads all available roles for the role assignment checkboxes.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.pages.users.create', compact('roles'));
    }

    /**
     * Store a newly created user account in the database.
     *
     * Password is hashed before storage. At least one role must be assigned.
     * The legacy numeric 'role' field is set to 7 as a default placeholder —
     * actual access control is handled by Spatie roles, not this field.
     *
     * Side effects:
     * - Creates a User record
     * - Assigns provided roles via syncRoles()
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'roles' => 'required|array'
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 7 // Default for non-legacy check or adjust as needed
        ]);

        $user->syncRoles($request->roles);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    /**
     * Show the edit form for an existing user.
     *
     * @param int $id The user's primary key
     * @return \Illuminate\View\View
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.pages.users.edit', compact('user', 'roles'));
    }

    /**
     * Update an existing user's profile and roles.
     *
     * Password is only updated when the 'password' field is filled in the request;
     * leaving it blank preserves the existing password. Username and email
     * uniqueness rules exclude the current user to allow saving without changes.
     *
     * Side effects:
     * - Updates User record
     * - Replaces all roles via syncRoles()
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id The user's primary key
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|unique:users,username,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'roles' => 'required|array'
        ]);

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
        ]);

        if ($request->filled('password')) {
            $user->update(['password' => Hash::make($request->password)]);
        }

        $user->syncRoles($request->roles);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Generate and assign a new random password to the specified user.
     *
     * Generates a 10-character random string, hashes and saves it,
     * then returns a view displaying the plain-text password once so the
     * super-admin can communicate it to the user. The plain password is
     * never stored or emailed — it must be manually conveyed.
     *
     * Side effects:
     * - Overwrites the user's current password in the database
     *
     * @param int $id The user's primary key
     * @return \Illuminate\View\View
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function resetPassword($id)
    {
        $user = User::findOrFail($id);

        // Generate a random password
        $plainPassword = \Illuminate\Support\Str::random(10);

        $user->update([
            'password' => Hash::make($plainPassword)
        ]);

        return view('admin.pages.users.reset_password', [
            'user' => $user,
            'plainPassword' => $plainPassword
        ]);
    }

    /**
     * Delete a user account.
     *
     * Prevents self-deletion by checking whether the target user is the
     * currently authenticated user, returning an error if so.
     *
     * @param int $id The user's primary key
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if ($user->id === auth()->id()) {
            return redirect()->route('users.index')->with('error', 'You cannot delete yourself.');
        }
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
