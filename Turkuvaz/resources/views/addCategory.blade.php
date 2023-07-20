<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Category</title>
</head>
<body>
<a href="{{route("homepage")}}">Homepage</a>
<h1>Add Category</h1>

<form action="{{route("categoryAdd")}}" method="post" >
    @csrf

    <label>Category Title</label><br><br>
    <input type="text" name="categorytitle"><br><br>
    @error("categorytitle")
    <div class="alert alert-danger" style="color:red" role="alert">
        {{$message}}
    </div>
    @enderror
    <label>Category Description</label><br><br>
    <input type="text" name="categorydescription"><br><br>
    <label>Status</label><br><br>
    <input type="text" name="categorystatus"><br><br><br>
    <input type="submit" name="send" value="Add"><br><br>


</form>

</body>
</html>
