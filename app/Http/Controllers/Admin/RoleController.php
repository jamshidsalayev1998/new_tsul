<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/**
 * Admin controller for managing Spatie permission roles.
 *
 * Provides CRUD operations for roles. On update, permissions can be
 * synchronised to a role via the 'permissions' array in the request.
 * Role names must be unique across the application.
 *
 * This controller manages the role definitions only — user-to-role
 * assignment is handled in UserManagementController.
 */
class RoleController extends Controller
{
    /**
     * Display a list of all roles.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.pages.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new role.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pages.roles.create');
    }

    /**
     * Store a newly created role in the database.
     *
     * Role name must be unique in the roles table.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name',
        ]);

        Role::create(['name' => $request->name]);

        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }

    /**
     * Display details for a specific role (not implemented).
     *
     * @param string $id
     * @return void
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the edit form for a role with all available permissions.
     *
     * Loads all permissions so the form can display checkboxes for
     * attaching/detaching permissions from the role.
     *
     * @param \Spatie\Permission\Models\Role $role Route-model-bound role instance
     * @return \Illuminate\View\View
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.pages.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update a role's name and synchronise its permissions.
     *
     * syncPermissions() replaces all existing role permissions with the
     * provided set. If 'permissions' is not in the request, all permissions
     * are effectively detached from the role.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Spatie\Permission\Models\Role $role Route-model-bound role instance
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id,
        ]);

        $role->update(['name' => $request->name]);
        $role->syncPermissions($request->permissions);

        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }

    /**
     * Delete a role from the database.
     *
     * Note: Spatie does not automatically detach the role from users on deletion.
     * Ensure no users have this role assigned before deleting, or handle cleanup separately.
     *
     * @param \Spatie\Permission\Models\Role $role Route-model-bound role instance
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }
}
