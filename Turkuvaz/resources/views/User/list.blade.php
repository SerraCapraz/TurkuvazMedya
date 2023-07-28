@extends( "layout.master")

@section("title")
    List of Users
@endsection

@section("header")
    User List
@endsection

@section("context")
    <form action="{{Route("deleteAllSelected")}}" method="post">
        @csrf
        <table class="table">
            <thead>
            <tr>
                <th></th>
                <th>#</th>
                <th>Name</th>
                <th>Title</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $d)
                <tr id="user_ids{{$d->id}}">
                    <td align="center"><input type="checkbox" name="ids[{{$d->id}}]" class="checkBoxClass" id=""
                                              value="{{$d->id}}"></td>
                    <td>{{$d->id}}</td>
                    <td>{{$d->username}}</td>
                    <td>{{$d->usertitle}}</td>
                    <td><a href="{{url("edit/".$d->username)}}">Edit</a></td>
                    <td><a href="{{url("delete/".$d->username)}}">Delete</a></td>
                </tr>
            @endforeach
            <button type="submit">Delete All Selected</button><br><br>
            </tbody>
        </table>

    </form>
@endsection
