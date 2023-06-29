@extends('includes.base')
@section('title', 'titulo joia de adicionar users')

@section('content')
    <h2>Adicione seu user </h2>
        @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }} <br>
        @endforeach
        @endif

    <form action="{{url()->current()}}" method="post">

        @csrf
        <input type="text" name="name" placeholder="Nome do user" value="{{ old('name', $user['name'] ?? '') }}">
        <br>
        <input type="email" name="email"placeholder="Email" value="{{ old('email', $user['email'] ?? '') }}">
        <br>
        <input type="password" name="password" placeholder="Senha" value="{{ old('password', $user['password'] ?? '') }}">
        <hr width="12%" align="left">
        <input type="submit" value="Gravar">
    </form>
@endsection
