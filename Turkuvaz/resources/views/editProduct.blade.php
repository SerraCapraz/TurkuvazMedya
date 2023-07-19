<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
<h1>Edit Product</h1>

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



</body>
</html>
