<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RevokePermissionFromRoleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Role $role, Permission $permission)
    {
      $role->revokePermissionTo($permission);

      session()->flash('flash.banner', 'Разрешение отозвано!');
      session()->flash('flash.bannerStyle', 'danger');

      return back();
    }
}
