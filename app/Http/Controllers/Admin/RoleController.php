<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\StoreRoleRequest;
use App\Http\Requests\Role\UpdateRoleRequest;
use App\Http\Resources\PermissionResource;
use App\Http\Resources\RoleResource;
use Inertia\Inertia;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $rolesPermissions = Role::with('permissions')->get();
      $roles = RoleResource::collection($rolesPermissions);
      return Inertia::render('Admin/Roles/Index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $permissions = PermissionResource::collection(Permission::all());

      return Inertia::modal('Admin/Roles/Create', compact('permissions'))->baseRoute('admin.roles.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
      $role = Role::create([
        'name' => $request->name,
        'guard_name' => 'web'
      ]);

      if ($request->has('permissions')) {
        $role->syncPermissions($request->input('permissions.*.name'));
      }

      session()->flash('flash.banner', 'Новая роль успешно добавлена');
      session()->flash('flash.bannerStyle', 'success');

      return to_route('admin.roles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
      $role = new RoleResource($role);
      $role->load('permissions');
      $permissions = PermissionResource::collection(Permission::all());

      return Inertia::modal('Admin/Roles/Edit', compact('role', 'permissions'))->baseRoute('admin.roles.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
      $role->update([
        'name' => $request->name,
      ]);

      $role->syncPermissions($request->input('permissions.*.name'));

      session()->flash('flash.banner', 'Роль успешно обновлена');
      session()->flash('flash.bannerStyle', 'success');

      return to_route('admin.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
      $role->delete();

      session()->flash('flash.banner', 'Роль удалена!');
      session()->flash('flash.bannerStyle', 'danger');

      return back();
    }
}
