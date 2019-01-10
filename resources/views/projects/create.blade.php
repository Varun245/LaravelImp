<html>
<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
<title>Create </title>
</head>
<body>

<h1>Create</h1>

<form method="POST" action="/projects">
    {{ csrf_field() }}
    Title:<br>
    <input type="text" name="title" value="{{old('title')}}"><br>
    Description:<br>
    <textarea name="description" ></textarea>
    <br><br>
    <input type="submit" value="Submit">
</form>


@if($errors->any())
<div class="notification is-dager">

    <ul>
        @foreach ($errors->all() as $error )

        <li>
            {{$error}}
        </li>
            
        @endforeach
    </ul>

</div>
@endif

</body>

</html>