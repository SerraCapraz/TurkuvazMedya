@extends("layout.master")

@section("title")
    User
@endsection

@section("header")
    User
@endsection

@section("context")
    <a href="{{route("register")}}">Add New User</a><br><br>
    <a href="{{route("list")}}">List</a>
@endsection
