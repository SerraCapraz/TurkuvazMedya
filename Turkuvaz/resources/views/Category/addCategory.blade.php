@extends("layout.master")

@section("title")
    Add Category
@endsection

@section("header")
    Add Category
@endsection

@section("context")
    <form action="{{route("categoryAdd")}}" method="post" >
        @csrf

        <label>Category Title</label><br><br>
        <input type="text" name="categorytitle"><br><br>
        @error("categorytitle")
        <div class="alert alert-danger" style="color:red" role="alert">
            {{$message}}
        </div>
        @enderror
        <label>Category Description</label><br><br>
        <input type="text" name="categorydescription"><br><br>
        <label>Status</label><br><br>
        <input type="text" name="categorystatus"><br><br><br>
        <input type="submit" name="send" value="Add"><br><br>


    </form>
@endsection
