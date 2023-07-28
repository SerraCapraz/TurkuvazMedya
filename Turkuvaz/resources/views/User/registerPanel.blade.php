@extends("layout.master")

@section("title")
    Register
@endsection

@section("header")
    Register
@endsection

@section("context")
    <form action="{{route("postUser")}}" method="post" >
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
        <input type="password" name="password"><br><br><br>
        @error("password")
        <div class="alert alert-danger" style="color:red" role="alert">
            {{$message}}
        </div>
        @enderror
        <input type="submit" name="gönder" value="Sign in"><br><br>



    </form>
@endsection
