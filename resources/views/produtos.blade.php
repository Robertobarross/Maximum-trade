@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Meus produtos'){{--Extenção do título--}}

@section('content'){{--Conteúdo--}}

<div id="produtos">

    @if (session('msg')){{--Mensagem de atualização do produto--}}
    <p class="texto-form">{{ session('msg') }}</p>
    @endif

    <p class="camp-produtos">Usuário(a): {{ $produtoOwner['name'] }} </p>
    @csrf
    @auth
    @if(count($produtos) > 0)
    @foreach ($produtos as $produto)
    <div id="post-produtos">
        <p></p><h1 class="camp-produtos">Código do produto: {{ $produto->id }} - Produto: {{ $produto->prod }} - Valor R$: {{ $produto->valor }} - Data da postagem: {{ date('d/m/y', strtotime($produto->dt)) }} -
        <img src="/pasta-img/img/{{ $produto->foto }}" alt="{{ $produto->foto }}" class="img-produtos">
        <a href="/produtos/edit/{{ $produto->id }}"><button class="btn-produtos">Editar</button></a></p>
    </div>

   @endforeach
   @else
   <p>Você não tem produtos cadastrados! <a href="/cadprod">Cadastre seu produto!</a> </p>
   @endif
   @endauth

</div>


@endsection {{--Conteúdo--}}
