<?php

use App\Http\Controllers\Groups\ShowController;
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

])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/contacts', function () {
  return Inertia::render('Contacts');
})->name('contacts');

Route::get('/groups/{group}', ShowController::class)->name('groups.show');

Route::get('/courses', function () {
  return Inertia::render('Courses/Index');
})->name('courses.index');

Route::get('/courses/course', function () {
  return Inertia::render('Courses/Show');
})->name('courses.show');

require_once __DIR__ . '/jetstream.php';
require_once __DIR__ . '/fortify.php';

?>
