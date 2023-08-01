@extends("layout.master")

@section("title")
    Add Product
@endsection


@section("context")
    <div class="d-flex justify-content-center w-25">
        <div class="mt-2 w-100">
            <div class="card p-5 w-100">
                <h1>Add Product</h1><br><br>
                <form class="d-flex align-items-center flex-column" action="{{route("productAdd")}}" method="post">
                    @csrf

                    <input type="text" name="producttitle" class="form-control" placeholder="Product Title" aria-label="Username"
                           aria-describedby="basic-addon1"><br>
                    @error("categorytitle")
                    <div class="alert alert-danger" style="color:red" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                    <select name="productcategoryid" class="form-control" placeholder="Product Category ID" aria-label="Username"
                            aria-describedby="basic-addon1">
                        <@foreach($dataofcategory as $catdata)
                            <option value="{{$catdata->id}}">{{$catdata->categorytitle}}</option>
                        @endforeach
                    </select><br>
                    <input type="text" name="barcode" class="form-control" placeholder="Barcode" aria-label="Username"
                           aria-describedby="basic-addon1"><br>
                    <input type="text" name="productstatus" class="form-control" placeholder="Product Status" aria-label="Username"
                           aria-describedby="basic-addon1"><br><br>
                    <input type="submit" name="send" value="Add" class="btn btn-primary rounded submit p-3 px-5"
                           style="background-color: #382063"><br><br>


                </form>
            </div>
        </div>
    </div>
@endsection
