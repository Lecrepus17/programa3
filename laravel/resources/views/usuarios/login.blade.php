<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login lidão</title>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>
<body>
@if (session('erro'))
    <div>{{ session('erro') }}</div>
@endif
<div style="border: 1px solid peru; width:50%; margin:0 auto; text-align: center">
    <h1>Login!!!</h1>
    <form action="{{ url()->current() }}" method="POST">
        @csrf
        <input type="email" name="email">
        <br><br>
        <input type="password" name="password">
        <br><br>
        <input type="submit" value="Login, por favor clique nesse botão">
    </form>
</div>


</body>
</html>
