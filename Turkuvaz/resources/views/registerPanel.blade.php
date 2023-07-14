<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<h1>Register</h1>
<body>

<form action="{{route("user")}}" method="post" >
    @csrf

    <label>Username</label><br><br>
    <input type="text" name="username"><br><br>
    @error("username")
    <div class="alert alert-danger" style="color:red" role="alert">
        {{$message}}
    </div>
    @enderror
    <label>User Title</label><br><br>
    <input type="text" name="usertitle"><br><br>
    <label>Password</label><br><br>
    <input type="text" name="password"><br><br><br>
    @error("password")
    <div class="alert alert-danger" style="color:red" role="alert">
        {{$message}}
    </div>
    @enderror
    <input type="submit" name="gönder" value="Sign in"><br><br>


</form>

</body>
</html>
