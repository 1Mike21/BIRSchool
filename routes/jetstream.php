<?php

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Inertia\CurrentUserController;
use Laravel\Jetstream\Http\Controllers\Inertia\OtherBrowserSessionsController;
use Laravel\Jetstream\Http\Controllers\Inertia\PrivacyPolicyController;
use Laravel\Jetstream\Http\Controllers\Inertia\ProfilePhotoController;
use Laravel\Jetstream\Http\Controllers\Inertia\TermsOfServiceController;
use Laravel\Jetstream\Http\Controllers\Inertia\UserProfileController;
use Laravel\Jetstream\Jetstream;

Route::group(['middleware' => config('jetstream.middleware', ['web'])], function () {
  if (Jetstream::hasTermsAndPrivacyPolicyFeature()) {
    Route::get('/terms-of-service', [TermsOfServiceController::class, 'show'])->name('terms.show');
    Route::get('/privacy-policy', [PrivacyPolicyController::class, 'show'])->name('policy.show');
  }

  $authMiddleware = config('jetstream.guard')
    ? 'auth:' . config('jetstream.guard')
    : 'auth';

  $authSessionMiddleware = config('jetstream.auth_session', false)
    ? config('jetstream.auth_session')
    : null;

  Route::group(['middleware' => array_values(array_filter([$authMiddleware, $authSessionMiddleware]))], function () {
    // User & Profile...
    Route::get('/user/profile', [UserProfileController::class, 'show'])
      ->name('profile.show');

    Route::delete('/user/other-browser-sessions', [OtherBrowserSessionsController::class, 'destroy'])
      ->name('other-browser-sessions.destroy');

    Route::delete('/user/profile-photo', [ProfilePhotoController::class, 'destroy'])
      ->name('current-user-photo.destroy');

    if (Jetstream::hasAccountDeletionFeatures()) {
      Route::delete('/user', [CurrentUserController::class, 'destroy'])
        ->name('current-user.destroy');
    }
  });
});
