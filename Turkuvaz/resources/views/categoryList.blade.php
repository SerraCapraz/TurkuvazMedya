<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category List</title>
</head>
<body>
<a href="{{route("homepage")}}">Homepage</a>
<h1>List of Categories</h1>
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
        @php
            $i=1;
        @endphp
        @foreach($categorydata as $cd)
            <tr id="">
                <td>{{$i++}}</td>
                <td>{{$cd->categorytitle}}</td>
                <td>{{$cd->categorydescription}}</td>
                <td>{{$cd->categorystatus}}</td>
                <td><a href="{{url("edit/".$cd->categorytitle)}}">Edit</a></td>
                <td><a href="{{url("delete/".$cd->categorytitle)}}">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

</form>
</body>
</html>
