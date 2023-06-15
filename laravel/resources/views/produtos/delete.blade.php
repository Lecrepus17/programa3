@extends('includes.base')
@section('title', 'Deleta a desgraça ou produto')

@section('content')
    <h1>Tem certeza que quer apagar esse lindo ser????</h1>
    <h2>{{ $prod->name }}</h2>
    <p>Preço: R$ {{number_format($prod->price, 2, ',', '.')}}</p>
    <p>Quantidade: {{$prod->quantity}}</p>
    <form action="{{ route('produtos.deleteForReal', $prod->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Pô Apaga aí!">
    </form>
        <p><a href="{{route('produtos')}}">Voltar</a></p>
@endsection
