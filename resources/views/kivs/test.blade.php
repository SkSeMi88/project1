<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- <form action={{route('/users/create') }} method="post"> --}}
    <form action='/users/create' method="post">
        @csrf
        <input type="text" name="abc">
        <button type="submit" >Отправить форму</button>
    </form>
</body>
</html>
