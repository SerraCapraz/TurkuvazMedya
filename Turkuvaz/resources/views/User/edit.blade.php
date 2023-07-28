@extends("layout.master")

@section("title")
    Edit User
@endsection

@section("header")
    Edit User
@endsection

@section("context")
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
@endsection
