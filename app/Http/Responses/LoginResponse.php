<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
  public function toResponse($request)
  {
    $role = auth()->user()->roles->pluck('name')[0];

    if ($role === 'Администратор') {
      return redirect()->route('admin.dashboard');
    }

    elseif ($role === 'Куратор') {
      return redirect()->route('admin.homeworks.index');
    }

    return redirect()->route('index');
  }
}
