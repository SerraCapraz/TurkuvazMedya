@extends("layout.master")

@section("title")
    Edit User
@endsection


@section("context")

    <div class="d-flex justify-content-center w-25">
        <div class="mt-3 w-100">
            <div class="card p-5 w-100">
                <h1>Edit User</h1><br>
                <form class="d-flex align-items-center flex-column" action="{{route("editPassword",["username"=>$user->username])}}" method="post">
                    @csrf

                    <input type="text" name="username" value="{{$user->username}}" class="form-control"><br>
                    @error("username")
                    <div class="alert" style="color:red" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                    <input type="text" name="usertitle" value="{{$user->usertitle}}" class="form-control" aria-label="Username"
                           aria-describedby="basic-addon1"><br>
                    <input type="password" name="password" value="{{$user->password}}" class="form-control" aria-label="Username"
                           aria-describedby="basic-addon1"><br>
                    @error("password")
                    <div class="alert" style="color:red" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                    <input type="submit" name="edit" value="Edit" class="btn btn-primary rounded submit p-3 px-5"
                           style="background-color: #382063"><br><br>


                </form>
            </div>
        </div>
    </div>

@endsection
