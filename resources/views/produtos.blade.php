@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Meus produtos'){{--Extenção do título--}}

@section('content'){{--Conteúdo--}}

<div id="produtos">

    @if (session('msg')){{--Mensagem de atualização do produto--}}
    <p class="texto-form">{{ session('msg') }}</p>
    @endif

    @csrf
    @auth
    @if(count($produtos) > 0)
    @foreach ($produtos as $produto)
    <div id="post-produtos" class="col-md-12">
        <p class="camp-produtos">Usuário(a): {{ $produtoOwner['name'] }} </p>
        <h1 class="camp-produtos">Produto: {{ $produto->prod }}</h1>
        <img src="/pasta-img/img/{{ $produto->foto }}" alt="{{ $produto->foto }}" class="img-produtos">
        <h1 class="camp-produtos">Especificações: {{ $produto->informe }}</h1>
        <h2 class="camp-produtos">Valor R$: {{ $produto->valor }}</h2>
        <h3 class="camp-produtos">Data da postagem: {{ date('d/m/y', strtotime($produto->dt)) }}</h3>
        <h4 class="camp-produtos">Obs: {{ $produto->obs }}</h4>
        <h5 class="camp-produtos">Código do produto: {{ $produto->id }}</h5>

        <a href="/produtos/edit/{{ $produto->id }}"><button class="btn-produtos">Editar</button></a>
    </div>

   @endforeach
   @else
   <p>Você não tem produtos cadastrados! <a href="/cadprod">Cadastre seu produto!</a> </p>
   @endif
   @endauth

</div>


@endsection {{--Conteúdo--}}
