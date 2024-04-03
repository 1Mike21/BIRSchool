<?php

namespace App\Http\Controllers;

use App\Models\LearningStep;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLearningStepRequest;
use App\Http\Requests\UpdateLearningStepRequest;

class LearningStepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLearningStepRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LearningStep $learningStep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LearningStep $learningStep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLearningStepRequest $request, LearningStep $learningStep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LearningStep $learningStep)
    {
        //
    }
}
