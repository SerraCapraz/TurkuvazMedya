@extends("layout.master")

@section("title")
    Delete Category
@endsection

@section("header")
    Delete Category
@endsection

@section("context")
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $err)
                <li>{{$err}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route("deleteCategory",["categorytitle"=>$category_var->categorytitle])}}" method="post" >
        @csrf

        <label>Category Title</label><br><br>
        <input type="text" name="categorytitle" value="{{$category_var->categorytitle}}" readonly><br><br>
        <label>Category Description</label><br><br>
        <input type="text" name="categorydescription" value="{{$category_var->categorydescription}}" readonly><br><br>
        <label>Category Status</label><br><br>
        <input type="text" name="categorystatus" value="{{$category_var->categorystatus}}" readonly><br><br><br>
        <input type="submit" name="delete" value="Delete"><br><br>


    </form>
@endsection
