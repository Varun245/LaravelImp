@extends('layout')





@section('content')

<h1>Edit Page</h1>

<form method="POST" action="/projects/{{$project->id}}">
{{method_field('PATCH')}}
{{ csrf_field() }}
  
    Title:<br>
<input type="text" name="title" value="{{$project->title}}"><br>
    Description:<br>
<textarea name="description">{{$project->description}}</textarea>
    <br><br>
    <input type="submit" value="Submit">
</form>


@endsection
