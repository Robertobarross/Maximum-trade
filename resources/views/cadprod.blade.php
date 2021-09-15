@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Cadastrar produtos'){{--Extenção do título--}}

@section('content'){{--Conteúdo--}}

<div class="cadprod" align="center">

    @if (session('msg')){{--Mensagem confirmando o cadastro--}}
    <p class="texto-form">{{ session('msg') }}</p>
    @endif

    <form action="/cadprod" method="post" enctype="multipart/form-data"></form>
    @csrf

    <h1 class="form-produto">Cadastrar produto</h1>

    <input type="text" id="produto" name="produto" placeholder="Nome do produto!" class="form-produto" required>

    <input type="file" id="foto" name="foto" placeholder="Foto do produto!" class="form-produto" required>

    <input type="text" id="informe" name="informe" placeholder="Informações do produto!" class="form-produto" required>

    <input type="text" id="valor" name="valor" placeholder="Valor do produto!" class="form-produto" required>

    <input type="date" id="data" name="data" placeholder="Data do cadastro!" class="form-produto" required>

    <input type="text" id="obs" name="obs" maxlength="100" placeholder="Observações sobre o produto!" class="form-produto" required>

    <p><input type="submit" class="btn-btn" value="Cadastrar"></p>

</div>


@endsection {{--Conteúdo--}}
