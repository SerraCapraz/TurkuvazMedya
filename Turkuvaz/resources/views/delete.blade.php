@extends("layout.master")

@section("title")
    Delete User
@endsection

@section("header")
    Delete User
@endsection

@section("context")
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $err)
                <li>{{$err}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route("deleteFunction",["username"=>$user->username])}}" method="post" >
        @csrf

        <label>Username</label><br><br>
        <input type="text" name="username" value="{{$user->username}}" readonly><br><br>
        <label>User Title</label><br><br>
        <input type="text" name="usertitle" value="{{$user->usertitle}}" readonly><br><br>
        <label>Password</label><br><br>
        <input type="password" name="password" value="{{$user->password}}" readonly><br><br><br>
        <input type="submit" name="delete" value="Delete"><br><br>


    </form>
@endsection
