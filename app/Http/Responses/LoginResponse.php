<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

  public function toResponse($request)
  {
    return $request->wantsJson()
      ? response()->json()
      : redirect()->intended(
        auth()->user()->roles->pluck('Администратор') ? route('admin.dashboard') : route('index')
      );
  }
}
