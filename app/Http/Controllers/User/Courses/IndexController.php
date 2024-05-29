<?php

namespace App\Http\Controllers\User\Courses;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Inertia\Inertia;

class IndexController extends Controller
{
  public function __invoke()
  {
    $course = Course::where('is_active', '=', 1)->first();

    return Inertia::render('User/Courses/Index', compact('course'));
  }
}
