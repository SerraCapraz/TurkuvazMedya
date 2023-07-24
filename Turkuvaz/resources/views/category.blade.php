@extends("layout.master")

@section("title")
    Category
@endsection

@section("header")
    Category
@endsection

@section("context")
    <a href="{{route("addCategory")}}">Add New Category</a><br><br>
    <a href="{{route("categoryList")}}">Category List</a>
@endsection
