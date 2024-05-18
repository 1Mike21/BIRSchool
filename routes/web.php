<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\Courses\IndexController as CoursesIndexController;
use App\Http\Controllers\Courses\ShowController as CoursesShowController;
use App\Http\Controllers\Groups\ShowController as GroupsShowController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\User\Courses\IndexController as UserCoursesIndexController;
// use App\Http\Controllers\User\Profile\IndexController as UserProfileIndexController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Jetstream\Http\Controllers\Inertia\CurrentUserController;
use Laravel\Jetstream\Http\Controllers\Inertia\OtherBrowserSessionsController;
use Laravel\Jetstream\Http\Controllers\Inertia\PrivacyPolicyController;
use Laravel\Jetstream\Http\Controllers\Inertia\ProfilePhotoController;
use Laravel\Jetstream\Http\Controllers\Inertia\TermsOfServiceController;
use Laravel\Jetstream\Http\Controllers\Inertia\UserProfileController;
use Laravel\Jetstream\Jetstream;

$authMiddleware = config('jetstream.guard')
  ? 'auth:' . config('jetstream.guard')
  : 'auth';

$authSessionMiddleware = config('jetstream.auth_session', false)
  ? config('jetstream.auth_session')
  : null;

// Guest
Route::get('/', IndexController::class)->name('index');

Route::get('/contacts', ContactsController::class)->name('contacts');

Route::get('/groups/{group}', GroupsShowController::class)->name('groups.show');

Route::get('/courses', CoursesIndexController::class)->name('courses.index');

Route::get('/courses/{course}', CoursesShowController::class)->name('courses.show');

if (Jetstream::hasTermsAndPrivacyPolicyFeature()) {
  Route::get('/terms-of-service', [TermsOfServiceController::class, 'show'])->name('terms.show');
  Route::get('/privacy-policy', [PrivacyPolicyController::class, 'show'])->name('policy.show');
}

Route::group( ['auth:sanctum','verified','middleware' => array_values(array_filter([$authMiddleware, $authSessionMiddleware]))], function () {
  // Admin
  Route::prefix('admin')->name('admin.')->group(function ()
  {
    Route::get('/users', function () {
      return Inertia::render('Admin/Users/Index');
    })->name('users.index');

    Route::get('/dashboard', function () {
      return Inertia::render('Dashboard');
    })->name('dashboard');
  });

  // User & Profile...
  Route::prefix('user')->name('user.')->group(function ()
  {
    Route::get('/courses', UserCoursesIndexController::class)->name('courses.index');

    // Route::get('/profile', function () {
    //   return Inertia::render('User/Profile/Index');
    // })->name('profile.index');

    // Route::get('/profile', [UserProfileIndexController::class])->name('profile.index');

    Route::get('/profile', [UserProfileController::class, 'show'])->name('profile.show');

    Route::delete('/other-browser-sessions', [OtherBrowserSessionsController::class, 'destroy'])->name('other-browser-sessions.destroy');

    Route::delete('/profile-photo', [ProfilePhotoController::class, 'destroy'])->name('current-user-photo.destroy');

    if (Jetstream::hasAccountDeletionFeatures()) {
      Route::delete('/', [CurrentUserController::class, 'destroy'])->name('current-user.destroy');
    }
  });
});

require_once __DIR__ . '/fortify.php';
?>
