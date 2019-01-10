<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function update(Task $task)
    {
        
        // $task->update([
        //     'completed'=>request()->has('completed')
        // ]);

        if(request()->has('completed'))
        {
            $task->complete();
        }
        else{
            $task->incomplete();    
        }

        return back();
    }

    public function store(Project $project)
    {
        $validate=request()->validate(['description'=>'required']);
        $project->addTask($validate);
    //    Task::create([
    //     'project_id'=>$project->id,
    //     'description'=>request('description')
    //    ]);

       return back();
    }
}
