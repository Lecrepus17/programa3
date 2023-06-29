@extends('includes.base')
@section('title', 'Ver o user')

@section('content')
    <h1>{{ $user->name }}</h1>
    <p>Email: {{$user->email}}</p>
        <p><a href="{{route('usuarios')}}">Voltar</a></p>
@endsection
