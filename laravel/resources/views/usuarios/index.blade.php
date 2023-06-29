@extends('includes.base')
@section('title', 'titulo joia dos usuarios')

@section('content')
@if (session('sucesso'))
    <div style="background-color: greenyellow; color: rebeccapurple;"><marquee speed="50">{{session('sucesso')}}</marquee> </div>
@endif
<form action="{{ route('usuarios') }}" method="POST">
    @csrf
    <input type="text" name="busca">
    <select name="ord">
        <option value="asc">Crescente</option>
        <option value="desc">Decrescente</option>
    </select>
    <input type="submit" value="buscar">
</form>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>email</th>
            <th>Editar</th>
            <th>Apagar</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td><a href="{{ route('usuarios.view', $user->id) }}">{{$user->name}}</a></td>
            <td>R$ {{$user->email}}</td>
            <td><a href="{{ route('usuarios.edit', $user->id)}}">Editar</a></td>
            <td><a href="{{ route('usuarios.delete', $user->id)}}">Deletar</a></td>
        </tr>
        @endforeach
    </table>
    {{ $users->links('vendor.pagination.default') }}
    <a href="{{route('usuarios.add')}}">adicionar usuarios</a>
@endsection
