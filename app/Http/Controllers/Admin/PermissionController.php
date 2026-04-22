<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

/**
 * Admin controller for managing Spatie permission definitions.
 *
 * Provides CRUD operations for granular permissions. Permissions are
 * created here and then assigned to roles via RoleController. Permission
 * names must be unique across the application.
 */
class PermissionController extends Controller
{
    /**
     * Display a list of all permissions.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.pages.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new permission.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pages.permissions.create');
    }

    /**
     * Store a newly created permission in the database.
     *
     * Permission name must be unique in the permissions table.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name',
        ]);

        Permission::create(['name' => $request->name]);

        return redirect()->route('permissions.index')->with('success', 'Permission created successfully.');
    }

    /**
     * Display details for a specific permission (not implemented).
     *
     * @param string $id
     * @return void
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the edit form for an existing permission.
     *
     * @param \Spatie\Permission\Models\Permission $permission Route-model-bound permission instance
     * @return \Illuminate\View\View
     */
    public function edit(Permission $permission)
    {
        return view('admin.pages.permissions.edit', compact('permission'));
    }

    /**
     * Update a permission's name.
     *
     * Uniqueness check excludes the current record to allow saving without name changes.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Spatie\Permission\Models\Permission $permission Route-model-bound permission instance
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name,' . $permission->id,
        ]);

        $permission->update(['name' => $request->name]);

        return redirect()->route('permissions.index')->with('success', 'Permission updated successfully.');
    }

    /**
     * Delete a permission from the database.
     *
     * Note: Spatie does not automatically detach the permission from roles on deletion.
     *
     * @param \Spatie\Permission\Models\Permission $permission Route-model-bound permission instance
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permissions.index')->with('success', 'Permission deleted successfully.');
    }
}
