@extends('includes.base')
@section('title', 'titulo joia dos produtos')

@section('content')
@if (session('sucesso'))
    <div style="background-color: greenyellow; color: rebeccapurple;"><marquee speed="50">{{session('sucesso')}}</marquee> </div>
@endif
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Editar</th>
            <th>Apagar</th>
        </tr>
        @foreach ($prods as $prod)
        <tr>
            <td><a href="{{ route('produtos.view', $prod->id) }}">{{$prod->name}}</a></td>
            <td>R$ {{number_format($prod->price, 2, ',', '.')}}</td>
            <td>{{$prod->quantity}}</td>
            <td><a href="{{ route('produtos.edit', $prod->id)}}">Editar</a></td>
            <td><a href="{{ route('produtos.delete', $prod->id)}}">Deletar</a></td>
        </tr>
        @endforeach
    </table>
    <a href="{{route('produtos.add')}}">adicionar produtos</a>
@endsection
