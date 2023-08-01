@extends("layout.master")

@section("title")
    Homepage
@endsection

@section("header")
    Homepage
@endsection

@section("context")
    <br>
    <a href="{{route("user")}}" style="font-size: 20px; color: #4c0ab8">User </a><br>
    <a href="{{route("category")}}" style="font-size: 20px; color: #4c0ab8">Category</a><br>
    <a href="{{route("product")}}" style="font-size: 20px; color: #4c0ab8">Product</a><br>
@endsection
