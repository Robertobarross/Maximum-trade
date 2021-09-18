@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Cadastrar produtos'){{--Extenção do título--}}

@section('content'){{--Conteúdo--}}

<div class="cadprod" align="center">

    @if (session('msg')){{--Mensagem confirmando o cadastro--}}
    <p class="texto-form">{{ session('msg') }}</p>
    @endif

    <form action="/produtos" method="post" enctype="multipart/form-data">
    @csrf

    <h1 class="form-produto">Cadastrar produto</h1>

    <input type="text" id="prod" name="prod" placeholder="Nome do produto!" class="form-produto" required>

    <input type="file" id="foto" name="foto" placeholder="Foto do produto!" class="form-produto" required>

    <input type="text" id="informe" name="informe" placeholder="Informações do produto!" class="form-produto" required>

    <input type="text" id="valor" name="valor" placeholder="Valor do produto!" class="form-produto" required>

    <input type="date" id="dt" name="dt" placeholder="Data do cadastro!" class="form-produto" required>

    <input type="text" id="obs" name="obs" maxlength="100" placeholder="Observações sobre o produto!" class="form-produto" required>

    <p><input type="submit" class="btn-btn" value="Cadastrar"></p>

</form>

</div>


@endsection {{--Conteúdo--}}
