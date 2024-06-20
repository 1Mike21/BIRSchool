<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Http\Resources\CourseResource;
use App\Http\Resources\GroupResource;
use App\Models\Group;
use GuzzleHttp\Psr7\MimeType;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class CourseController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $courses = Course::with('group:id,title');
    $courses = CourseResource::collection($courses->paginate(10))->response()->getData(true);

    return Inertia::render('Admin/Courses/Index', compact('courses'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $groups = GroupResource::collection(Group::all());
    return Inertia::modal('Admin/Courses/Create', compact('groups'))->baseRoute('admin.courses.index');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreCourseRequest $request)
  {
    Course::create([
      'title' => $request->title,
      'icon' => $request->file('icon')->store('icons', 'public'),
      'description' => $request->description,
      'price' => $request->price,
      'group_id' => $request->group_id,
      'is_active' => $request->is_active,
    ]);

    session()->flash('flash.banner', 'Курс успешно добавлен');
    session()->flash('flash.bannerStyle', 'success');

    return to_route('admin.courses.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Course $course)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Course $course)
  {
    $icon = [
      'url' => Storage::url($course->icon),
      'name' => basename($course->icon),
      'type' => MimeType::fromFilename(basename($course->icon))
    ];

    $course = new CourseResource($course);
    $groups = GroupResource::collection(Group::all());

    return Inertia::modal('Admin/Courses/Edit', compact('course', 'icon', 'groups'))->baseRoute('admin.courses.index');
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateCourseRequest $request, Course $course)
  {
    $icon = $course->icon;
    if ($request->hasFile('icon')) {
      Storage::disk('public')->delete($course->icon);
      $icon = $request->file('icon')->store('icons', 'public');
    }
    $course->update([
      'title' => $request->title,
      'icon' => $icon,
      'description' => $request->description,
      'price' => $request->price,
      'group_id' => $request->group_id,
      'is_active' => $request->is_active,
    ]);

    session()->flash('flash.banner', 'Курс успешно обновлен');
    session()->flash('flash.bannerStyle', 'success');

    return to_route('admin.courses.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Course $course)
  {
    Storage::disk('public')->delete($course->icon);
    $course->delete();

    session()->flash('flash.banner', 'Курс удален!');
    session()->flash('flash.bannerStyle', 'danger');

    return to_route('admin.courses.index');
  }
}
