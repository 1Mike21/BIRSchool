<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\StoreRoleRequest;
use App\Http\Requests\Role\UpdateRoleRequest;
use App\Http\Resources\RoleResource;
use Inertia\Inertia;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $roles = RoleResource::collection(Role::all());
      return Inertia::render('Admin/Roles/Index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return Inertia::modal('Admin/Roles/Create')->baseRoute('admin.roles.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
      Role::create([
        'name' => $request->name,
        'guard_name' => 'web'
      ]);

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

      return Inertia::modal('Admin/Roles/Edit', compact('role'))->baseRoute('admin.roles.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
      $role->update([
        'name' => $request->name,
      ]);

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
