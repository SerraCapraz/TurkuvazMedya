@extends("layout.master")

@section("title")
    Category
@endsection

@section("header")
    Category
@endsection

@section("context")
    <br>
    <a href="{{route("addCategory")}}" style="font-size: 20px; color: #4c0ab8">Add New Category</a><br>
    <a href="{{route("categoryList")}}" style="font-size: 20px; color: #4c0ab8">Category List</a>
@endsection
