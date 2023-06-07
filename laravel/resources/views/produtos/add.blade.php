@extends('includes.base')
@section('title', 'titulo joia de adicionar produtos')

@section('content')
    <h2>Adicione seu produto </h2>
        @if ($errors)
        @foreach ($errors->all() as $err)
            {{ $err }} <br>
        @endforeach
        @endif

    <form action="{{url()->current()}}" method="post">

        @csrf
        <input type="text" name="name" placeholder="Nome do Produto" value="{{ old('name', $prod['name'] ?? '') }}">
        <br>
        <input type="number" name="price" step="0.01" placeholder="Preço" value="{{ old('price', $prod['price'] ?? '') }}">
        <br>
        <input type="number" name="quantity" placeholder="Quantidade" value="{{ old('quantity', $prod['quantity'] ?? '') }}">
        <hr width="12%" align="left">
        <input type="submit" value="Gravar">
    </form>
@endsection
