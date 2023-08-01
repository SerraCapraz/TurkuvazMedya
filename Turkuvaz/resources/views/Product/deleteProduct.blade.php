@extends("layout.master")

@section("title")
    Delete Product
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
                <h1>Delete Product</h1><br>
                <form class="d-flex align-items-center flex-column"
                      action="{{route("deleteProduct",["producttitle"=>$product_var->producttitle])}}" method="post">
                    @csrf

                    <input type="text" name="producttitle" value="{{$product_var->producttitle}}" class="form-control" readonly><br><br>
                    <input type="text" name="productcategoryid" value="{{$product_var->productcategoryid}}" class="form-control"
                           readonly><br><br>
                    <input type="text" name="barcode" value="{{$product_var->barcode}}" class="form-control" readonly><br><br>
                    <input type="text" name="productstatus" value="{{$product_var->productstatus}}" class="form-control"
                           readonly><br><br>
                    <input type="submit" name="delete" value="Delete" class="btn btn-primary rounded submit p-3 px-5"
                           style="background-color: #382063"><br><br>


                </form>
            </div>
        </div>
    </div>

@endsection

