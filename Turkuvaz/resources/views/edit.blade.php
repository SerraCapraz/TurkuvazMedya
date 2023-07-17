<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>
<h1>Edit User</h1>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $err)
            <li>{{$err}}</li>
        @endforeach
    </ul>
@endif

<form action="{{route("editPassword",["username"=>$user->username])}}" method="post">
    @csrf

    <label>Username</label><br><br>
    <input type="text" name="username" value="{{$user->username}}"><br><br>
    <label>User Title</label><br><br>
    <input type="text" name="usertitle" value="{{$user->usertitle}}"><br><br>
    <label>Password</label><br><br>
    <input type="text" name="password"><br><br><br>
    <input type="submit" name="edit" value="Edit"><br><br>


</form>



</body>
</html>
