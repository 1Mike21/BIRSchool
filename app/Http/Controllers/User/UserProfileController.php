<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Laravel\Fortify\Features;
use Laravel\Jetstream\Http\Controllers\Inertia\UserProfileController as InertiaUserProfileController;
use Laravel\Jetstream\Jetstream;

class UserProfileController extends InertiaUserProfileController
{
  public function show(Request $request)
  {
    $this->validateTwoFactorAuthenticationState($request);

    return Jetstream::inertia()->render($request, 'User/Profile/Show', [
      'confirmsTwoFactorAuthentication' => Features::optionEnabled(Features::twoFactorAuthentication(), 'confirm'),
      'sessions' => $this->sessions($request)->all(),
    ]);
  }
}
