@extends("layout.master")

@section("title")
    Homepage
@endsection

@section("header")
    Homepage
@endsection

@section("context")
    <a href="{{route("user")}}">User</a><br><br>
    <a href="{{route("category")}}">Category</a><br><br>
    <a href="{{route("product")}}">Product</a><br><br>
@endsection
