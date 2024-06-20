<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\GroupResource;
use App\Models\Group;
use App\Models\PolyResource;
use App\Models\Review;
use Inertia\Inertia;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
      $groups = Group::where('is_active', '=', 1)->get();
      $groups = GroupResource::collection($groups);

      $studentsProjects = PolyResource::where('img', 'like', '/storage/slider_student_portfolio/%')->latest()->pluck('img');

      $reviews = Review::where('comment', 'like', '/storage/slider_reviews/%')->where('is_published', '=', 1)->latest()->pluck('comment');
      return Inertia::render('Index', compact('groups', 'studentsProjects', 'reviews'));
    }
}
