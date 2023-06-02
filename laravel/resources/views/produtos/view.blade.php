@extends('includes.base')
@section('title', 'Ver o produto')

@section('content')
    <h1>{{ $prod->name }}</h1>
    <p>Preço: R$ {{number_format($prod->price, 2, ',', '.')}}</p>
    <p>Quantidade: {{$prod->quantity}}</p>
        <p><a href="{{route('produtos')}}">Voltar</a></p>
@endsection
