<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete User</title>
</head>
<body>
<h1>Delete User</h1>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $err)
            <li>{{$err}}</li>
        @endforeach
    </ul>
@endif

<form action="{{route("homepage")}}" method="post" >
    @csrf

    <label>Username</label><br><br>
    <input type="text" name="username"><br><br>
    <label>User Title</label><br><br>
    <input type="text" name="usertitle"><br><br>
    <label>Password</label><br><br>
    <input type="text" name="password"><br><br><br>
    <input type="submit" name="delete" value="Delete"><br><br>


</form>




</body>
</html>
