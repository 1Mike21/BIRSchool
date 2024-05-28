<?php

namespace App\Http\Controllers\Admin;

use App\Models\Group;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\LearningStep;
use Inertia\Inertia;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $groups = Group::all();

      return Inertia::render('Admin/Groups/Index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return Inertia::modal('Admin/Groups/Create')->baseRoute('admin.groups.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
      $groupDescription = Group::find($group->id)->polyResources;

      $group = Group::find($group->id);

      $learningSteps = LearningStep::where('group_id', '=', $group->id)->get();

      return Inertia::render('Admin/Groups/Show', compact('groupDescription', 'group', 'learningSteps'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGroupRequest $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }
}
