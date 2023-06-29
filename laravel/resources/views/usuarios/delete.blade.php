@extends('includes.base')
@section('title', 'Deleta a desgraça ou user')

@section('content')
    <h1>Tem certeza que quer apagar esse lindo ser????</h1>
    <h2>{{ $user->name }}</h2>
    <p>{{$user->email}}</p>

    <form action="{{ route('usuarios.deleteForReal', $user->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Pô Apaga aí!">
    </form>
        <p><a href="{{route('usuarios')}}">Voltar</a></p>
@endsection
