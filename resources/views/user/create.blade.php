<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Page</title>
</head>
<body>
    <h1>Form Create</h1>
    <form action="{{ route('user.store') }}" method="post">
        {{ csrf_field() }}
        <label for="">Username</label><br>
        <input type="text" name="username" id="username">
        <br>
        <label for="">Password</label><br>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>