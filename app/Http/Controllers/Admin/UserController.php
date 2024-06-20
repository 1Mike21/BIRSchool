<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Resources\RoleResource;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $users = User::with('roles');
      $users = UserResource::collection($users->paginate(10))->response()->getData(true);
      return Inertia::render('Admin/Users/Index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $roles = RoleResource::collection(Role::all());
      return Inertia::modal('Admin/Users/Create', compact('roles'))->baseRoute('admin.users.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
      $user = User::create([
        'name' => $request->name,
        'surname' => $request->surname,
        'email' => $request->email,
        'phone_number' => $request->phone_number,
        'password' => Hash::make($request->password),
      ]);

      if ($request->has('role')) {
        $user->assignRole($request->input('role.name'));
      }

      session()->flash('flash.banner', 'Пользователь успешно добавлен');
      session()->flash('flash.bannerStyle', 'success');

      return to_route('admin.users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
      $user->load('roles');
      $user = new UserResource($user);
      $roles = RoleResource::collection(Role::all());

      return Inertia::modal('Admin/Users/Edit', compact('user', 'roles'))->baseRoute('admin.users.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
      $user->update([
        'name' => $request->name,
        'surname' => $request->surname,
        'email' => $request->email,
        'phone_number' => $request->phone_number,
      ]);

      if ($request->has('role')) {
        $user->syncRoles($request->input('role.*.name'));
      }

      session()->flash('flash.banner', 'Данные пользователя успешно изменены');
      session()->flash('flash.bannerStyle', 'success');

      return to_route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
      $user->delete();

      session()->flash('flash.banner', 'Пользователь удален!');
      session()->flash('flash.bannerStyle', 'danger');

      return to_route('admin.users.index');
    }
}
