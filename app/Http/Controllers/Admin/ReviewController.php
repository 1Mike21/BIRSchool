<?php

namespace App\Http\Controllers\Admin;

use App\Models\Review;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use Inertia\Inertia;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return Inertia::render('Admin/Reviews/Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return Inertia::modal('Admin/Reviews/Create')->baseRoute('admin.reviews.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReviewRequest $request)
    {
      Review::create([
        'comment' => $request->file('comment')->store('slider_reviews', 'public'),
        'is_published' => $request->is_published
      ]);

      session()->flash('flash.banner', 'Отзыв успешно добавлен');
      session()->flash('flash.bannerStyle', 'success');

      return to_route('admin.reviews.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        //
    }
}
