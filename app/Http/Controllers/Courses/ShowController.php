<?php

namespace App\Http\Controllers\Courses;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use App\Models\Theme;
use Inertia\Inertia;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Course $course)
    {
      $course = new CourseResource($course);

      $themes = Theme::where('course_id', '=', $course->id)->get();

      return Inertia::render('Courses/Show', compact('course', 'themes'));
    }
}
