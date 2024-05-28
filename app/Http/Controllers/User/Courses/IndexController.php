<?php

namespace App\Http\Controllers\User\Courses;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
      $courses = Course::where('is_active', '=', 1)->get();

      return Inertia::render('User/Courses/Index', compact('courses'));
    }
}
