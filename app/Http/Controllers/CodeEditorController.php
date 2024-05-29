<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class CodeEditorController extends Controller
{
  public function __invoke()
  {
    return Inertia::render('CodeEditor');
  }
}
