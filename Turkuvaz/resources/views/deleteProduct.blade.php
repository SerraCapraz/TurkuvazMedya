<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Product</title>
</head>
<body>
<h1>Delete Product</h1>
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
    <input type="text" name="producttitle" value="{{$product_var->producttitle}}"><br><br>
    <label>Product Category ID</label><br><br>
    <input type="text" name="productcategoryid" value="{{$product_var->productcategoryid}}"><br><br>
    <label>Barcode</label><br><br>
    <input type="text" name="barcode" value="{{$product_var->barcode}}"><br><br><br>
    <label>Product Status</label><br><br>
    <input type="text" name="productstatus" value="{{$product_var->productstatus}}"><br><br><br>
    <input type="submit" name="delete" value="Delete"><br><br>


</form>




</body>
</html>
