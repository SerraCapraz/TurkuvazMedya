<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Category</title>
</head>
<body>
<h1>Delete Category</h1>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $err)
            <li>{{$err}}</li>
        @endforeach
    </ul>
@endif

<form action="{{route("deleteCategory",["categorytitle"=>$category_var->categorytitle])}}" method="post" >
    @csrf

    <label>Category Title</label><br><br>
    <input type="text" name="categorytitle" value="{{$category_var->categorytitle}}"><br><br>
    <label>Category Description</label><br><br>
    <input type="text" name="categorydescription" value="{{$category_var->categorydescription}}"><br><br>
    <label>Category Status</label><br><br>
    <input type="text" name="categorystatus" value="{{$category_var->categorystatus}}"><br><br><br>
    <input type="submit" name="delete" value="Delete"><br><br>


</form>




</body>
</html>
