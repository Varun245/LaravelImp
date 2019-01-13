<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Services\Twitter;
use Illuminate\Support\Facades\Gate;


class ProjectsController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }


    public function index()
    {
       
    //     $projects=Project::all();
         $projects = Project::where('owner_id',auth()->id())->get();//select * from projects where ownerid=4

        //return $projects;
        return view('projects.index', compact('projects'));
    }


    public function show(Project $project,Twitter $twitter)
    {
        // $project=Project::findorFail($id);
        //return $project;
        // $twitter=app('twitter');
        // dd('twitter');
        // if($project->owner_id!==auth()->id())
        // {
        //     abort(403);
        // }

      $this->authorize('update',$project);//Use this

     //   $projects=auth()->user()->projects;
    //  abort_unless(\Gate::denies('update',$project)); //if gate debies upadate on given prooject
          
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
      //  dd(auth()->id);
     // $validated['owner_id']=auth()->id;
        Project::create($validated + ['owner_id'=>auth()->id()]);


    //    $project=new Project();

    //    $project->title=request('title');
    //    $project->description=request('description');

    //    $project->save();

        return redirect('/projects');
    }
}
