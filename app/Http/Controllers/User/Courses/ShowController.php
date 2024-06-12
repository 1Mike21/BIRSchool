<?php

namespace App\Http\Controllers\User\Courses;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class ShowController extends Controller
{
    public function __invoke()
    {
      return Inertia::render('User/Courses/Show');
    }
}
