<?php

use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RevokePermissionFromRoleController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Courses\IndexController as CoursesIndexController;
use App\Http\Controllers\Courses\ShowController as CoursesShowController;
use App\Http\Controllers\Groups\ShowController as GroupsShowController;
use App\Http\Controllers\IndexController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', IndexController::class)->name('index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',

])->prefix('admin')->name('admin.')->group(function () {
  Route::resource('/users', UserController::class);
  Route::resource('/roles', RoleController::class);
  Route::resource('/permissions', PermissionController::class);
  Route::resource('/groups', GroupController::class);
  Route::delete('/roles/{role}/permissions/{permission}', RevokePermissionFromRoleController::class)->name('roles.permissions.destroy');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/contacts', function () {
  return Inertia::render('Contacts');
})->name('contacts');

Route::get('/groups/{group}', GroupsShowController::class)->name('groups.show');

Route::get('/courses', CoursesIndexController::class)->name('courses.index');

Route::get('/courses/{course}', CoursesShowController::class)->name('courses.show');

require_once __DIR__ . '/jetstream.php';
require_once __DIR__ . '/fortify.php';

?>
