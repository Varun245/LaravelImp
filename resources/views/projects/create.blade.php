<html>
<head>
<title>Create </title>
</head>
<body>

<h1>Create</h1>

<form method="POST" action="/projects">
    {{ csrf_field() }}
    Title:<br>
    <input type="text" name="title"><br>
    Description:<br>
    <textarea name="description"></textarea>
    <br><br>
    <input type="submit" value="Submit">
</form>


</body>

</html>