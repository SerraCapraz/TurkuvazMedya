@extends("layout.master")

@section("title")
    List of Categories
@endsection

@section("header")
    List of Categories
@endsection

@section("context")
    <form><br>
        @csrf
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Category Title</th>
                <th>Category Description</th>
                <th>Category Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>

            @foreach($categorydata as $cd)
                <tr id="">
                    <td>{{$cd->id}}</td>
                    <td>{{$cd->categorytitle}}</td>
                    <td>{{$cd->categorydescription}}</td>
                    <td>{{$cd->categorystatus}}</td>
                    <td><a href="{{url("editCategory/".$cd->categorytitle)}}" style="color: #4c0ab8">Edit</a></td>
                    <td><a href="{{url("deleteCategory/".$cd->categorytitle)}}" style="color: #4c0ab8">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </form>
@endsection
