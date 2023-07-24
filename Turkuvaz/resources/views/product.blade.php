@extends("layout.master")

@section("title")
    Product
@endsection

@section("header")
    Product
@endsection

@section("context")
    <a href="{{route("addProduct")}}">Add New Product</a><br><br>
    <a href="{{route("productList")}}">Product List</a>
@endsection
