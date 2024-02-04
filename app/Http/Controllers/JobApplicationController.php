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
        $this->authorize('apply', $job);

        $validatedData = $request->validated();

        $file = $request->file('cv');
        $path = $file->store('cvs', 'private');

        $job->jobApplications()->create([
            'user_id' => $request->user()->id,
            'expected_salary' => $validatedData['expected_salary'],
            'cv_path' => $path
        ]);

        return redirect()->route('jobs.show', $job)
            ->with('success', 'Job application applied.');
    }
}
