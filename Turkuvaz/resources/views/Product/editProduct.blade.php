@extends("layout.master")

@section("title")
    Edit Product
@endsection

@section("context")
    <div class="d-flex justify-content-center w-25">
        <div class="mt-3 w-100">
            <div class="card p-5 w-100">
                <h1>Edit Product</h1><br>
                <form class="d-flex align-items-center flex-column"
                      action="{{route("editProduct",["producttitle"=>$product_var->producttitle])}}" method="post">
                    @csrf

                    <input type="text" name="producttitle" value="{{$product_var->producttitle}}" class="form-control"><br><br>
                    <select name="productcategoryid" class="form-control">
                        <@foreach($dataofcategory as $catdata)
                            <option value="{{$catdata->id}}">{{$catdata->id}}</option>
                        @endforeach
                    </select><br><br>
                    <input type="text" name="barcode" value="{{$product_var->barcode}}" class="form-control"><br><br><br>
                    <input type="text" name="productstatus" value="{{$product_var->productstatus}}" class="form-control"><br><br><br>
                    <input type="submit" name="edit" value="Edit" class="btn btn-primary rounded submit p-3 px-5"
                           style="background-color: #382063"><br><br>


                </form>
            </div>
        </div>
    </div>

@endsection
