<?php

namespace App\Http\Controllers\User\Profile;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function __invoke()
    {
      return Inertia::render('User/Profile/Index');
    }
}
