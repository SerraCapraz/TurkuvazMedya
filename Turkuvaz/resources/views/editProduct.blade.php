@extends("layout.master")

@section("title")
    Edit Product
@endsection

@section("header")
    Edit Product
@endsection

@section("context")
    <form action="{{route("editProduct",["producttitle"=>$product_var->producttitle])}}" method="post">
        @csrf

        <label>Product Title</label><br><br>
        <input type="text" name="producttitle" value="{{$product_var->producttitle}}"><br><br>
        <label>Product Category ID</label><br><br>
        <select name="productcategoryid">
            <@foreach($dataofcategory as $catdata)
                <option value="{{$catdata->id}}">{{$catdata->categorytitle}}</option>
            @endforeach
        </select><br><br>
        <label>Barcode</label><br><br>
        <input type="text" name="barcode" value="{{$product_var->barcode}}"><br><br><br>
        <label>Product Status</label><br><br>
        <input type="text" name="productstatus" value="{{$product_var->productstatus}}"><br><br><br>
        <input type="submit" name="edit" value="Edit"><br><br>


    </form>
@endsection
