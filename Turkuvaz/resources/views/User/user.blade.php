@extends("layout.master")

@section("title")
    User
@endsection

@section("header")
    User
@endsection

@section("context")
    <br>
    <a href="{{route("register")}}" style="font-size: 20px; color: #4c0ab8">Add New User</a><br>
    <a href="{{route("list")}}" style="font-size: 20px; color: #4c0ab8">List</a>
@endsection
