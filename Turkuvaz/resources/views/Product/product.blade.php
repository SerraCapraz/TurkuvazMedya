@extends("layout.master")

@section("title")
    Product
@endsection

@section("header")
    Product
@endsection

@section("context")
    <br>
    <a href="{{route("addProduct")}}" style="font-size: 20px; color: #4c0ab8">Add New Product</a><br>
    <a href="{{route("productList")}}" style="font-size: 20px; color: #4c0ab8">Product List</a>
@endsection
