<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\CareerApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    public function index()
    {
        $jobs = Career::where('is_active', true)
            ->orderBy('posted_at', 'desc')
            ->get();

        $departments = $jobs->groupBy('department')->sortKeys();

        return view('careers.index', compact('departments', 'jobs'));
    }

    public function show($slug)
    {
        $job = Career::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        return view('careers.show', compact('job'));
    }

    public function apply($slug, Request $request)
    {
        $job = Career::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'cover_letter' => ['required', 'string', 'max:5000'],
            'cv' => ['required', 'file', 'mimes:pdf,doc,docx', 'max:5120'],
        ]);

        $cvPath = $request->file('cv')->store('applications', 'public');

        CareerApplication::create([
            'career_id' => $job->id,
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'cover_letter' => $validated['cover_letter'],
            'cv_path' => $cvPath,
        ]);

        return back()->with('success', 'Your application has been submitted successfully. We will be in touch.');
    }
}
