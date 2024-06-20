<?php

namespace App\Http\Controllers\Admin;

use App\Models\Group;
use App\Http\Controllers\Controller;
use App\Http\Requests\Group\StoreGroupRequest;
use App\Http\Requests\Group\UpdateGroupRequest;
use App\Http\Resources\GroupResource;
use App\Http\Resources\LearningStepResource;
use App\Http\Resources\PolyResourceResource;
use App\Models\LearningStep;
use GuzzleHttp\Psr7\MimeType;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $groups = GroupResource::collection(Group::all());

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
      Group::create([
        'title' => $request->title,
        'icon' => $request->file('icon')->store('icons', 'public'),
        'description' => $request->description,
        'level' => $request->level,
        'is_active' => $request->is_active
      ]);

      session()->flash('flash.banner', 'Группа успешно добавлена');
      session()->flash('flash.bannerStyle', 'success');

      return to_route('admin.groups.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
      $group = new GroupResource($group);

      $groupDescription = PolyResourceResource::collection($group->polyResources);

      $learningSteps = LearningStepResource::collection($group->learningSteps);

      return Inertia::render('Admin/Groups/Show', compact('groupDescription', 'group', 'learningSteps'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
      $icon = [
        'url' => Storage::url($group->icon),
        'name' => basename($group->icon),
        'type' => MimeType::fromFilename(basename($group->icon))
      ];

      $group = new GroupResource($group);

      return Inertia::modal('Admin/Groups/Edit', compact('group', 'icon'))->baseRoute('admin.groups.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGroupRequest $request, Group $group)
    {
      $icon = $group->icon;
      if ($request->hasFile('icon')) {
        Storage::disk('public')->delete($group->icon);
        $icon = $request->file('icon')->store('icons', 'public');
      }
      $group->update([
        'title' => $request->title,
        'icon' => $icon,
        'description' => $request->description,
        'level' => $request->level,
        'is_active' => $request->is_active
      ]);

      session()->flash('flash.banner', 'Группа успешно обновлена');
      session()->flash('flash.bannerStyle', 'success');

      return to_route('admin.groups.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
      Storage::disk('public')->delete($group->icon);
      $group->delete();

      session()->flash('flash.banner', 'Группа удалена!');
      session()->flash('flash.bannerStyle', 'danger');

      return to_route('admin.groups.index');
    }
}
