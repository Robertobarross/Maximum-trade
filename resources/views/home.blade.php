@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Home'){{--Extenção do título--}}

@section('content'){{--Conteúdo--}}

{{--Incluindo imagem merchandising--}}
<div id="merchandising">
    <img src="/pasta-img/img/merchandising.png" alt="merchandising" class="img-merchandising">
</div>


{{--Aqui na home estão disponíveis todos os produtos--}}
<div id="home-produtos">

{{--Criei um form com os dados do produto para fazer a ponte entre o bd e o carrinho--}}
<form action="/produtos" method="post" enctype="multipart/form-data">
@csrf

@if(count($produtos) > 0)
@foreach ($produtos as $produto)
<div id="produtos-home" align="center">
    <h1 class="prod-home">Produto: {{ $produto->prod }}</h1>
    <img src="/pasta-img/img/{{ $produto->foto }}" alt="{{ $produto->foto }}" class="img-produtos-home">
    <h1 class="prod-home">Especificações: {{ $produto->informe }}</h1>
    <h2 class="prod-home">Valor R$: {{ $produto->valor }}</h2>
    <h3 class="prod-home">Data da postagem: {{ date('d/m/y', strtotime($produto->dt)) }}</h3>
    <h4 class="prod-home">Obs: {{ $produto->obs }}</h4>
    <h5 class="prod-home">Código do produto: {{ $produto->id }}</h5>

    <a href="/produtos/carrinho/{{ $produto->id }}"><button class="btn-produtos">Comprar</button></a>
</div>
@endforeach
@endif

</form>

</div>

@endsection {{--Conteúdo--}}
