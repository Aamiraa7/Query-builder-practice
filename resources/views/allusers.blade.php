<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Users List</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
                <th>View</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $id => $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{$user->password}}</td>
                    <td><a href="{{route('singleUser', $user->id)}}" class="btn btn-primary btn-sm">View</a></td>
                    <td><a href="{{route('deleteUser', $user->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>