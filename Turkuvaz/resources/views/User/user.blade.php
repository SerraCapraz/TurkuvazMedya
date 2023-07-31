@extends("layout.master")

@section("title")
    User
@endsection

@section("header")
    User
@endsection

@section("context")
    <br>
    <a href="{{route("register")}}">Add New User</a><br>
    <a href="{{route("list")}}">List</a>
@endsection
