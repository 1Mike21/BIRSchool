<?php

namespace App\Http\Controllers\User\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CalendarController extends Controller
{
  public function __invoke(Request $request)
  {
    return Inertia::render('User/Profile/Calendar');
  }
}
