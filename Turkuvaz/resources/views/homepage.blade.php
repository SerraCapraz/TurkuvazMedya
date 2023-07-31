@extends("layout.master")

@section("title")
    Homepage
@endsection

@section("header")
    Homepage
@endsection

@section("context")
    <br>
    <a href="{{route("user")}}">User</a><br>
    <a href="{{route("category")}}">Category</a><br>
    <a href="{{route("product")}}">Product</a><br>
@endsection
