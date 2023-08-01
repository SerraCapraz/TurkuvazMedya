@extends( "layout.master")

@section("title")
    List of Users
@endsection

@section("header")
    User List
@endsection

@section("context")
    <div class="d-flex justify-content-center">
        <form action="{{Route("deleteAllSelected")}}" method="post"><br>
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
                        <td><a href="{{url("edit/".$d->username)}}" style="color: #4c0ab8">Edit</a></td>
                        <td><a href="{{url("delete/".$d->username)}}" style="color: #4c0ab8">Delete</a></td>
                    </tr>
                @endforeach
                <div class="d-flex justify-content-center"><button type="submit" class="btn btn-primary rounded submit align-self-center" style="background-color: #382063">Delete All Selected</button>
                </div><br>

                </tbody>
            </table>

        </form>
    </div>
@endsection
