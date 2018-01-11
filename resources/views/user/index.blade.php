<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Index</title>
</head>
<body>
    <h1>Index User</h1>
    <table border="1">
        <thead>
            <tr>
                <td>No</td>
                <td>Username</td>
                <td>Password</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @if(count($users) > 0)
                @foreach($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['password'] }}</td>
                    <td></td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="4">Data tidak tersedia</td>    
                </tr>
            @endif
        </tbody>
    </table>
</body>
</html>