@extends('layout.template')
@section('tile','Produtos')
@section('content')
<div> class = "container"
<h1>Paginas Produtos</h1>
    @foreach($produtos as produto)
    <p>{{ $produto->nome }}</p>
@endsection


    {{$produtos->links()}}
</div>
@endsection

