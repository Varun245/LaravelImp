<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Services\Twitter;


class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::where('owner_id',auth()->id())->get();

        //return $projects;
        return view('projects.index', compact('projects'));
    }


    public function show(Project $project,Twitter $twitter)
    {
        // $project=Project::findorFail($id);
        //return $project;
        $twitter=app('twitter');
        dd('twitter');
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        // $project=Project::find($id);

        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
    //   $project=Project::find($id);


        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }


    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
       //return request()->all();
        $validated=request()->validate([
            'title'=>['required','min:3'],
            'description'=>'required'
        ]);

        //return $validated;
        Project::create($validated);


    //    $project=new Project();

    //    $project->title=request('title');
    //    $project->description=request('description');

    //    $project->save();

        return redirect('/projects');
    }
}
