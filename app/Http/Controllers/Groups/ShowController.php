<?php

namespace App\Http\Controllers\Groups;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\LearningStep;
use Inertia\Inertia;

class ShowController extends Controller
{
    public function __invoke(Group $group)
    {
      $groupDescription = Group::find($group->id)->polyResources;

      $group = Group::find($group->id);

      $learningSteps = LearningStep::where('group_id', '=', $group->id)->get();

      return Inertia::render('Groups/Show', compact('groupDescription', 'group', 'learningSteps'));
    }
}
