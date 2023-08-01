@extends("layout.master")

@section("title")
    Add Category
@endsection


@section("context")
    <div class="d-flex justify-content-center w-25">
        <div class="mt-3 w-100">
            <div class="card p-5 w-100">
                <h1>Add Category</h1><br><br>
                <form class="d-flex align-items-center flex-column" action="{{route("categoryAdd")}}" method="post">
                    @csrf

                    <input type="text" name="categorytitle" class="form-control" placeholder="Category Title" aria-label="Username"
                           aria-describedby="basic-addon1"><br>
                    @error("categorytitle")
                    <div class="alert alert-danger" style="color:red" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                    <input type="text" name="categorydescription" class="form-control" placeholder="Category Description" aria-label="Username"
                           aria-describedby="basic-addon1"><br>
                    <input type="text" name="categorystatus" class="form-control" placeholder="Category Status" aria-label="Username"
                           aria-describedby="basic-addon1"><br><br>
                    <input type="submit" name="send" value="Add" class="btn btn-primary rounded submit p-3 px-5"
                           style="background-color: #382063"><br><br>


                </form>
            </div>
        </div>
    </div>

@endsection
