@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Maximum-trade'){{--Extenção do título--}}

@section('content'){{--Conteúdo--}}


<div class="dashboard">
    @csrf
    @auth
    @if(count($empresas) > 0)
    @foreach ($empresas as $empresa)

    <p>Usuário(a): {{ $empresaOwner['name'] }}</p>
    <br>Loja: {{ $empresa->empresa }}</br>
    <p>Endereço: {{ $empresa->endereco }} - Número: {{ $empresa->numero }} - Cidade: {{ $empresa->cidade }} - UF: {{ $empresa->uf }}</p>

    <br><a href="/cadprod">Cadastrar produtos!</a>
    <p><a href="/produtos">Meus produtos!</a>
    <p><a href="/">Ir as compras!</a>

        <p class="linha"></p>

    @endforeach
    @else
    <p>Você não tem loja cadastrada! <a href="/create-empresa">Criar loja</a> </p>
    @endif
    @endauth
</div>

@endsection {{--Conteúdo--}}
