<html>
<head>
<title>Projects</title>
</head>
<body>

    <h1>Projects</h1>

@foreach ($projects as $item)


<a href="/projects/{{$item->id}}">
<li>{{$item->title}}</li>
</a>

@endforeach

    
</body>

</html>