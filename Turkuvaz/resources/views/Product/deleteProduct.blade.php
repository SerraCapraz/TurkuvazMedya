@extends("layout.master")

@section("title")
    Delete Product
@endsection

@section("header")
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

    <form action="{{route("deleteProduct",["producttitle"=>$product_var->producttitle])}}" method="post" >
        @csrf

        <label>Product Title</label><br><br>
        <input type="text" name="producttitle" value="{{$product_var->producttitle}}" readonly><br><br>
        <label>Product Category ID</label><br><br>
        <input type="text" name="productcategoryid" value="{{$product_var->productcategoryid}}" readonly><br><br>
        <label>Barcode</label><br><br>
        <input type="text" name="barcode" value="{{$product_var->barcode}}" readonly><br><br><br>
        <label>Product Status</label><br><br>
        <input type="text" name="productstatus" value="{{$product_var->productstatus}}" readonly><br><br><br>
        <input type="submit" name="delete" value="Delete"><br><br>


    </form>
@endsection

