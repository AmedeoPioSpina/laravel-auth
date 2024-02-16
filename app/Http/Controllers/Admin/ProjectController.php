<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $newProjects = new Project();
        $projects= $newProjects::all();
        return view('admin.projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $newProjects = new Project();
        $newProject = $request;
        $newProjects->name = $newProject->name;
        $newProjects->save();
        return redirect()->route('admin.projects');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $newProject = new Project();
        $project = $newProject::all()[$id - 1];
        return view('admin.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $newProjects = new Project();
        $project = Project::findOrFail($id);
        return view('admin.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
        $data = $request->all();
        $project->update($data);
        return redirect()->route('admin.projects', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
