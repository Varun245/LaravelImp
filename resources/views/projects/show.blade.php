@extends('layout')



@section('content')


<h1>{{$project->title}}</h1>


<div>{{$project->description}}</div>

<br>
<a href="/projects/{{$project->id}}/edit">Edit</a>
<br><br>

@if($project->tasks->count())

<div>
    @foreach ($project->tasks as $task)
    <div> 

    <form method="POST" action="/tasks/{{$task->id}}">
    @method('PATCH')
    @csrf

    <label class="checkbox {{$task->completed ? 'is-complete' : "" }}" for="completed"  >
    
    <input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? 'checked' : "" }}>
        {{$task->description}}
    

   </label>     

    </div>
    </form> 
    @endforeach
  
 </div>   

@endif


<form method="POST" action="/projects/{{$project->id}}/tasks">
    @csrf
   
    <div class="control">

        <input type="text" class="input" name="description" placeholder="new Task">

    </div>

    <br>


    <div class="control">
        
      <button type="submit" >Add Task</button>
    </div>

    @include('errors')
    

</form>


  


@endsection
