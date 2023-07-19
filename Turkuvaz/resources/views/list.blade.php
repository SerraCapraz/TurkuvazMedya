<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
</head>
<body>
<a href="{{route("homepage")}}">Homepage</a>
<h1>List of Users</h1>
<table class="table">
    <thead><tr>
        <th></th>
        <th>#</th>
        <th>Name</th>
        <th>Title</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr></thead>
    <tbody>
    @php
        $i=1;
    @endphp
    @foreach($data as $d)
        <tr>
            <td><input type="checkbox" name="checkbox" ></td>
            <td>{{$i++}}</td>
            <td>{{$d->username}}</td>
            <td>{{$d->usertitle}}</td>
            <td>{{$d->password}}</td>
            <td><a href="{{url("edit/".$d->username)}}">Edit</a></td>
            <td><a href="{{url("delete",$d->username)}}">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
