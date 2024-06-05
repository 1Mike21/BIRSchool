<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\ConfirmablePasswordController;
use Laravel\Fortify\Http\Controllers\ConfirmedPasswordStatusController;
use Laravel\Fortify\Http\Controllers\EmailVerificationNotificationController;
use Laravel\Fortify\Http\Controllers\EmailVerificationPromptController;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use Laravel\Fortify\Http\Controllers\PasswordController;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Laravel\Fortify\Http\Controllers\ProfileInformationController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use Laravel\Fortify\Http\Controllers\VerifyEmailController;
use Laravel\Fortify\RoutePath;

Route::group(['auth:sanctum', 'verified', 'middleware' => config('fortify.middleware', ['web'])], function () {
  $limiter = config('fortify.limiters.login');

  Route::post(RoutePath::for('login', '/login'), [AuthenticatedSessionController::class, 'store'])
    ->middleware(array_filter([
      'guest:' . config('fortify.guard'),
      $limiter ? 'throttle:' . $limiter : null,
    ]))->name('login');

  Route::post(RoutePath::for('logout', '/logout'), [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

  // Registration...
  if (Features::enabled(Features::registration())) {
    Route::post(RoutePath::for('register', '/register'), [RegisteredUserController::class, 'store'])
      ->middleware(['guest:' . config('fortify.guard')])->name('register');
  }

  Route::get(RoutePath::for('password.request', '/forgot-password'), [PasswordResetLinkController::class, 'create'])
    ->middleware(['guest:' . config('fortify.guard')])
    ->name('password.request');

  Route::post(RoutePath::for('password.email', '/forgot-password'), [PasswordResetLinkController::class, 'store'])
    ->middleware(['guest:' . config('fortify.guard')])
    ->name('password.email');

  Route::prefix('user')->name('user.')->group(function () {
    $verificationLimiter = config('fortify.limiters.verification', '6,1');

    // Password Reset...
    if (Features::enabled(Features::resetPasswords())) {

      Route::get(RoutePath::for('password.reset', '/reset-password/{token}'), [NewPasswordController::class, 'create'])
        ->middleware(['guest:' . config('fortify.guard')])
        ->name('password.reset');


      Route::post(RoutePath::for('password.update', '/reset-password'), [NewPasswordController::class, 'store'])
        ->middleware(['guest:' . config('fortify.guard')])
        ->name('password.update');
    }

    // Email Verification...
    if (Features::enabled(Features::emailVerification())) {
      Route::get(RoutePath::for('verification.notice', '/email/verify'), [EmailVerificationPromptController::class, '__invoke'])
        ->middleware([config('fortify.auth_middleware', 'auth') . ':' . config('fortify.guard')])
        ->name('verification.notice');

      Route::get(RoutePath::for('verification.verify', '/email/verify/{id}/{hash}'), [VerifyEmailController::class, '__invoke'])
        ->middleware([config('fortify.auth_middleware', 'auth') . ':' . config('fortify.guard'), 'signed', 'throttle:' . $verificationLimiter])
        ->name('verification.verify');

      Route::post(RoutePath::for('verification.send', '/email/verification-notification'), [EmailVerificationNotificationController::class, 'store'])
        ->middleware([config('fortify.auth_middleware', 'auth') . ':' . config('fortify.guard'), 'throttle:' . $verificationLimiter])
        ->name('verification.send');
    }

    // Profile Information...
    if (Features::enabled(Features::updateProfileInformation())) {
      Route::put(RoutePath::for('user-profile-information.update', '/profile-information'), [ProfileInformationController::class, 'update'])
        ->middleware([config('fortify.auth_middleware', 'auth') . ':' . config('fortify.guard')])
        ->name('user-profile-information.update');
    }

    // Passwords...
    if (Features::enabled(Features::updatePasswords())) {
      Route::put(RoutePath::for('user-password.update', '/password'), [PasswordController::class, 'update'])
        ->middleware([config('fortify.auth_middleware', 'auth') . ':' . config('fortify.guard')])
        ->name('user-password.update');
    }

    // Password Confirmation...
    Route::get(RoutePath::for('password.confirm', '/confirm-password'), [ConfirmablePasswordController::class, 'show'])
      ->middleware([config('fortify.auth_middleware', 'auth') . ':' . config('fortify.guard')]);

    Route::get(RoutePath::for('password.confirmation', '/confirmed-password-status'), [ConfirmedPasswordStatusController::class, 'show'])
      ->middleware([config('fortify.auth_middleware', 'auth') . ':' . config('fortify.guard')])
      ->name('password.confirmation');

    Route::post(RoutePath::for('password.confirm', '/confirm-password'), [ConfirmablePasswordController::class, 'store'])
      ->middleware([config('fortify.auth_middleware', 'auth') . ':' . config('fortify.guard')])
      ->name('password.confirm');
  });
});
