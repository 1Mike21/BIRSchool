<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Permission\StorePermissionRequest;
use App\Http\Requests\Permission\UpdatePermissionRequest;
use App\Http\Resources\PermissionResource;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $permissions = PermissionResource::collection(Permission::all());
      return Inertia::render('Admin/Permissions/Index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return Inertia::modal('Admin/Permissions/Create')->baseRoute('admin.permissions.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePermissionRequest $request)
    {
      Permission::create([
        'name' => $request->name,
        'guard_name' => 'web'
      ]);

      session()->flash('flash.banner', 'Разрешение успешно добавлено');
      session()->flash('flash.bannerStyle', 'success');

      return to_route('admin.permissions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
      $permission = new PermissionResource($permission);

      return Inertia::modal('Admin/Permissions/Edit', compact('permission'))->baseRoute('admin.permissions.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
      $permission->update([
        'name' => $request->name,
      ]);

      session()->flash('flash.banner', 'Разрешение успешно обновлено');
      session()->flash('flash.bannerStyle', 'success');

      return to_route('admin.permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
      $permission->delete();

      session()->flash('flash.banner', 'Разрешение удалено!');
      session()->flash('flash.bannerStyle', 'danger');

      return back();
    }
}
