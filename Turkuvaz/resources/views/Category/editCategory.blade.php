@extends("layout.master")

@section("title")
    Edit Category
@endsection


@section("context")
    <div class="d-flex justify-content-center w-25">
        <div class="mt-3 w-100">
            <div class="card p-5 w-100">
                <h1>Edit Category</h1><br>
                <form class="d-flex align-items-center flex-column" action="{{route("editCategory",["categorytitle"=>$category_var->categorytitle])}}" method="post">
                    @csrf

                    <input type="text" name="categorytitle" value="{{$category_var->categorytitle}}" class="form-control"><br><br>
                    @error("categorytitle")
                    <div class="alert" style="color:red" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                    <input type="text" name="categorydescription" class="form-control"
                           value="{{$category_var->categorydescription}}"><br><br>
                    @error("categorydescription")
                    <div class="alert" style="color:red" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                    <input type="text" name="categorystatus"  class="form-control" value="{{$category_var->categorystatus}}"><br><br><br>
                    @error("categorystatus")
                    <div class="alert" style="color:red" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                    <input type="submit" name="edit" value="Edit" class="btn btn-primary rounded submit p-3 px-5"
                           style="background-color: #382063"><br><br>


                </form>
            </div>
        </div>
    </div>
@endsection
