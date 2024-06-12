<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke()
    {
      $courses = Course::where('is_active', '=', 1)->get();

      return Inertia::render('Courses/Index', compact('courses'));
    }
}
