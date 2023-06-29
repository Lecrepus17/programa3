@extends('includes.base')
@section('title', 'Altterar o user')

@section('content')
    <h1>{{ $user->name }}</h1>
    <p>email: R$ {{$user->email}}</p>
        <p><a href="{{route('usuarios')}}">Voltar</a></p>
@endsection
