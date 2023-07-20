<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
</head>
<body>
<a href="{{route("homepage")}}">Homepage</a>
<h1>List of Products</h1>
<form>
    @csrf
    <table class="table">
        <thead>
        <tr>

            <th>#</th>
            <th>Product Title</th>
            <th>Product Category ID</th>
            <th>Barcode</th>
            <th>Product Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        @foreach($productdata as $pd)
                <td>{{$pd->id}}</td>
                <td>{{$pd->producttitle}}</td>
                <td>{{$pd->productcategoryid}}</td>
                <td>{{$pd->barcode}}</td>
                <td>{{$pd->productstatus}}</td>
                <td><a href="{{url("editProduct/".$pd->producttitle)}}">Edit</a></td>
                <td><a href="{{url("deleteProduct/".$pd->producttitle)}}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

</form>
</body>
</html>
