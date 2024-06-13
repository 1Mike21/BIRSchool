<?php

namespace App\Http\Controllers\User\Themes;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class ShowController extends Controller
{
  public function __invoke()
  {
    return Inertia::render('User/Themes/Show');
  }
}
