<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobApplicationRequest;
use App\Models\Job;

class JobApplicationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Job $job)
    {
        return view('job_application.create', compact('job'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Job $job,StoreJobApplicationRequest $request)
    {
        $job->jobApplications()->create([
            'user_id' => $request->user()->id,
             ...$request->validated()
        ]);

        return redirect()->route('jobs.show', $job)
            ->with('success', 'Job application applied.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
