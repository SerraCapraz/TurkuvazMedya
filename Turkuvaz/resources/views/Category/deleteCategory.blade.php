@extends("layout.master")

@section("title")
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
    <div class="d-flex justify-content-center w-25">
        <div class="mt-3 w-100">
            <div class="card p-5 w-100">
                <h1>Delete Category</h1><br>
                <form class="d-flex align-items-center flex-column" action="{{route("deleteCategory",["categorytitle"=>$category_var->categorytitle])}}"
                      method="post">
                    @csrf

                    <input type="text" name="categorytitle" value="{{$category_var->categorytitle}}" class="form-control" readonly><br><br>
                    <input type="text" name="categorydescription" value="{{$category_var->categorydescription}}" class="form-control"
                           readonly><br><br>
                    <input type="text" name="categorystatus" value="{{$category_var->categorystatus}}" class="form-control" readonly><br><br><br>
                    <input type="submit" name="delete" value="Delete" class="btn btn-primary rounded submit p-3 px-5"
                           style="background-color: #382063"><br><br>


                </form>
            </div>
        </div>
    </div>
@endsection
