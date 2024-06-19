<?php

namespace App\Http\Controllers\Groups;

use App\Http\Controllers\Controller;
use App\Http\Resources\GroupResource;
use App\Http\Resources\LearningStepResource;
use App\Http\Resources\PolyResourceResource;
use App\Models\Group;
use App\Models\LearningStep;
use Inertia\Inertia;

class ShowController extends Controller
{
    public function __invoke(Group $group)
    {
      $group = new GroupResource($group);

      $groupDescription = PolyResourceResource::collection($group->polyResources);

      $learningSteps = LearningStepResource::collection($group->learningSteps);

      return Inertia::render('Groups/Show', compact('groupDescription', 'group', 'learningSteps'));
    }
}
