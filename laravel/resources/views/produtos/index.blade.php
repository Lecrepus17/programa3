@extends('includes.base')
@section('title', 'titulo joia dos produtos')

@section('content')
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
        </tr>
        @foreach ($prods as $prod)
        <tr>
            <td>{{$prod->name}}</td>
            <td>R$ {{number_format($prod->price, 2, ',', '.')}}</td>
            <td>{{$prod->quantity}}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{route('produtos.add')}}">adicionar produtos</a>
@endsection
