<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
</head>
<h1>Add Product</h1>
<body>

<form action="{{route("productAdd")}}" method="post" >
    @csrf

    <label>Product Title</label><br><br>
    <input type="text" name="producttitle"><br><br>
    @error("categorytitle")
    <div class="alert alert-danger" style="color:red" role="alert">
        {{$message}}
    </div>
    @enderror
    <label>Product Category ID</label><br><br>
    <select name="productcategoryid">
        <@foreach($dataofcategory as $catdata)
            <option value="{{$catdata->id}}">{{$catdata->categorytitle}}</option>
        @endforeach
    </select><br><br>
    <label>Barcode</label><br><br>
    <input type="text" name="barcode"><br><br><br>
    <label>Product Status</label><br><br>
    <input type="text" name="productstatus"><br><br><br>
    <input type="submit" name="send" value="Add"><br><br>


</form>

</body>
</html>
