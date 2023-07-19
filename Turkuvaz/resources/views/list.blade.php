<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
</head>
<body>
<h1>List of Users</h1>
<form action="{{Route("deleteAllSelected")}}" method="post">
    @csrf
    <table class="table">
        <thead>
        <tr>
            <th></th>
            <th>#</th>
            <th>Name</th>
            <th>Title</th>
            <th>Password</th>
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
                <td>{{$d->password}}</td>
                <td><a href="{{url("edit/".$d->username)}}">Edit</a></td>
                <td><a href="{{url("delete/".$d->username)}}">Delete</a></td>
            </tr>
        @endforeach
        <button type="submit">Delete All Selected</button><br><br>
        </tbody>
    </table>

</form>
</body>
</html>
