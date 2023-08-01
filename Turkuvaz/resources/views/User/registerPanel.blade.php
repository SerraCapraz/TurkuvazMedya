@extends("layout.master")

@section("title")
    Register
@endsection


@section("context")
    <div class="d-flex justify-content-center w-25">
        <div class="mt-3 w-100">
            <div class="card p-5 w-100">
                <h1>Register</h1><br>
                <form class="d-flex align-items-center flex-column" action="{{route("postUser")}}" method="post"><br>
                    @csrf

                    <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username"
                           aria-describedby="basic-addon1"><br>
                    @error("username")
                    <div class="alert alert-danger" style="color:red" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                    <input type="text" name="usertitle" class="form-control" placeholder="Usertitle"
                           aria-label="Username" aria-describedby="basic-addon1"><br>
                    <input type="text" name="password" class="form-control" placeholder="Password" aria-label="Username"
                           aria-describedby="basic-addon1"><br><br>
                    @error("password")
                    <div class="alert alert-danger" style="color:red" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                    <input type="submit" name="gönder" value="Sign in" class="btn btn-primary rounded submit p-3 px-5"
                           style="background-color: #382063"><br><br>

                </form>
            </div>
        </div>
    </div>
@endsection
