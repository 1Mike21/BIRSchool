<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;
use Laravel\Fortify\Fortify;
use Laravel\Jetstream\Jetstream;
use Illuminate\Http\Request;


class JetstreamServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
    Jetstream::ignoreRoutes();
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    Fortify::resetPasswordView(function (Request $request) {
      return Inertia::render('Auth/ResetPassword', [
        'email' => $request->input('email'),
        'token' => $request->route('token'),
      ]);
    });

    Fortify::verifyEmailView(function () {
      return Inertia::render('Auth/VerifyEmail', [
        'status' => session('status'),
      ]);
    });

    Fortify::twoFactorChallengeView(function () {
      return Inertia::render('Auth/TwoFactorChallenge');
    });

    Fortify::confirmPasswordView(function () {
      return Inertia::render('Auth/ConfirmPassword');
    });

    Jetstream::deleteUsersUsing(DeleteUser::class);
  }
}
