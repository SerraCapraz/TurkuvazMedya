@extends("layout.master")

@section("title")
    List of Categories
@endsection

@section("header")
    List of Categories
@endsection

@section("context")
    <form>
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
                    <td><a href="{{url("editCategory/".$cd->categorytitle)}}">Edit</a></td>
                    <td><a href="{{url("deleteCategory/".$cd->categorytitle)}}">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </form>
@endsection
