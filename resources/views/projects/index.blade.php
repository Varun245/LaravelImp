<html>
<head>
<title>Projects</title>
</head>
<body>

    <h1>Projects</h1>

@foreach ($projects as $item)

<li>{{$item->title}}</li>
    
@endforeach

    
</body>

</html>