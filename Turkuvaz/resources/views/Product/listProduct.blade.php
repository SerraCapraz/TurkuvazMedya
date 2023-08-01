@extends("layout.master")

@section("title")
    Product List
@endsection

@section("header")
    List of Products
@endsection

@section("context")

    <form><br>
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
                <td><a href="{{url("editProduct/".$pd->producttitle)}}" style="color: #4c0ab8">Edit</a></td>
                <td><a href="{{url("deleteProduct/".$pd->producttitle)}}" style="color: #4c0ab8">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </form>
@endsection
