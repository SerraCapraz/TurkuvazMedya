<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Category</title>
</head>
<body>
<h1>Edit Category</h1>

<form action="{{route("editCategory",["categorytitle"=>$category_var->categorytitle])}}" method="post">
    @csrf

    <label>Category Title</label><br><br>
    <input type="text" name="categorytitle" value="{{$category_var->categorytitle}}"><br><br>
    @error("categorytitle")
    <div class="alert alert-danger" style="color:red" role="alert">
        {{$message}}
    </div>
    @enderror
    <label>Category Description</label><br><br>
    <input type="text" name="categorydescription" value="{{$category_var->categorydescription}}"><br><br>
    @error("categorydescription")
    <div class="alert alert-danger" style="color:red" role="alert">
        {{$message}}
    </div>
    @enderror
    <label>Category Status</label><br><br>
    <input type="text" name="categorystatus" value="{{$category_var->categorystatus}}"><br><br><br>
    @error("categorystatus")
    <div class="alert alert-danger" style="color:red" role="alert">
        {{$message}}
    </div>
    @enderror
    <input type="submit" name="edit" value="Edit"><br><br>


</form>



</body>
</html>
