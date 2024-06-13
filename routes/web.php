<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\CodeEditorController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\HomeworkController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\RevokePermissionFromRoleController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ThemeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Courses\IndexController as CoursesIndexController;
use App\Http\Controllers\Courses\ShowController as CoursesShowController;
use App\Http\Controllers\Groups\ShowController as GroupsShowController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\User\Courses\IndexController as UserCoursesIndexController;
use App\Http\Controllers\User\Courses\ShowController as UserCoursesShowController;
use App\Http\Controllers\User\HomeworkController as UserHomeworkController;
use App\Http\Controllers\User\Themes\ShowController as UserThemesShowController;
use App\Http\Controllers\User\Profile\IndexController as UserProfileIndexController;
use App\Http\Controllers\User\Profile\CertificateController as UserProfileCertificateController;
use App\Http\Controllers\User\Profile\CodeSpaces\IndexController as UserProfileCodeSpacesIndexController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Jetstream\Http\Controllers\Inertia\CurrentUserController;
use Laravel\Jetstream\Http\Controllers\Inertia\OtherBrowserSessionsController;
use Laravel\Jetstream\Http\Controllers\Inertia\PrivacyPolicyController;
use Laravel\Jetstream\Http\Controllers\Inertia\ProfilePhotoController;
use Laravel\Jetstream\Http\Controllers\Inertia\TermsOfServiceController;
use App\Http\Controllers\User\UserProfileController;
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

Route::get('/code-editor', CodeEditorController::class)->name('code-editor');

Route::get('/groups/{group}', GroupsShowController::class)->name('groups.show');

Route::get('/courses', CoursesIndexController::class)->name('courses.index');

Route::get('/courses/{course}', CoursesShowController::class)->name('courses.show');

if (Jetstream::hasTermsAndPrivacyPolicyFeature()) {
  Route::get('/terms-of-service', [TermsOfServiceController::class, 'show'])->name('terms.show');

  Route::get('/privacy-policy', [PrivacyPolicyController::class, 'show'])->name('policy.show');
}

// Admin
Route::middleware([
  'auth:sanctum',
  config('jetstream.auth_session'),
  'verified',
  ])->prefix('admin')->name('admin.')->group(function ()
  {
    Route::resource('/users', UserController::class);

    Route::resource('/roles', RoleController::class);

    Route::resource('/permissions', PermissionController::class);

    Route::resource('/groups', GroupController::class);

    Route::resource('/courses', CourseController::class);

    Route::resource('/homeworks', HomeworkController::class);

    Route::resource('/themes', ThemeController::class);

    Route::resource('/reviews', ReviewController::class);

    Route::delete('/roles/{role}/permissions/{permission}', RevokePermissionFromRoleController::class)->name('roles.permissions.destroy');

    Route::get('/dashboard', function () {
      return Inertia::render('Admin/Dashboard');
    })->name('dashboard');
  }
);

Route::group( ['auth:sanctum','verified','middleware' => array_values(array_filter([$authMiddleware, $authSessionMiddleware]))], function () {
  // User & Profile...
  Route::prefix('user')->name('user.')->group(function ()
  {
    Route::get('/courses', UserCoursesIndexController::class)->name('courses.index');

    Route::get('/courses/show', UserCoursesShowController::class)->name('courses.show');

    Route::get('/themes/show', UserThemesShowController::class)->name('themes.show');

    Route::resource('/homeworks', UserHomeworkController::class);

    Route::get('/profile', UserProfileIndexController::class)->name('profile.index');

    Route::get('/profile/certificates', UserProfileCertificateController::class)->name('profile.certificates');

    Route::get('profile/code-spaces', UserProfileCodeSpacesIndexController::class)->name('profile.code-spaces.index');

    Route::get('/profile/settings', [UserProfileController::class, 'show'])->name('profile.show');

    Route::delete('/other-browser-sessions', [OtherBrowserSessionsController::class, 'destroy'])->name('other-browser-sessions.destroy');

    Route::delete('/profile-photo', [ProfilePhotoController::class, 'destroy'])->name('current-user-photo.destroy');

    if (Jetstream::hasAccountDeletionFeatures()) {
      Route::delete('/', [CurrentUserController::class, 'destroy'])->name('current-user.destroy');
    }
  });
});

require_once __DIR__ . '/fortify.php';
?>
