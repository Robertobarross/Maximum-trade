<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar produto</title>
</head>
<body>

    {{--Arquivo para edição de produtos--}}
<div class="form-edit">

    <h1 class="edit-form">EDITAR PRODUTO: {{ $produto->prod }}</h1>
    <form action="/produtos/update/{{ $produto->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <br><label for="title" class="form">Mudar nome do produto:</label>
    <br><input type="text" class="edit-form" id="prod" name="prod" placeholder="Nome do produto" value="{{ $produto->prod }}">

    <br><label for="image" class="form">Nova imagem do produto:</label>
    <br><input type="file" id="foto" name="foto" class="edit-form">
    <br><img src="/pasta-img/img/{{ $produto->foto }}" alt="{{ $produto->foto }}" class="edit-img">

    <br><label for="title" class="form">Mudar informção do produto:</label>
    <br><input type="text" class="edit-form" id="informe" name="informe" placeholder="Informação do produto" value="{{ $produto->informe }}">

    <br><label for="title" class="form">Mudar valor do produto:</label>
    <br><input type="text" class="edit-form" id="valor" name="valor" placeholder="Valor do produto" value="{{ $produto->valor }}">

    <br><label for="title" class="form">Data de atualização do produto:</label>
    <br><input type="date" class="edit-form" id="dt" name="dt" placeholder="Data" value="{{ $produto->dt }}">

    <br><label for="title" class="form">Mudar observação do produto:</label>
    <br><input type="text" class="edit-form" id="obs" name="obs" placeholder="Obsservações" value="{{ $produto->obs }}">

    <p><input type="Submit" class="btn-btn-edit" value="Salvar">

    <p><a href="/" class="edit-link">Início</a>
    <br><a href="/produtos" class="edit-link">Meus Produtos</a>
    <br><a href="/dashboard" class="edit-link">Loja</a>
</form>

{{--Precisei estilizar direto na página, porque não aceitou a extenção template--}}
<style type="Text/css">
    .form-edit{
        width: 30%;
        height: auto;
        border: 1px solid #DCDCDC;
        border-radius: 5px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 30px
    }

    .edit-form{
        width: 82%;
        font-size: 13px;
        font-family: Arial;
        padding: 2px;
        color: gray;
        margin-left: 8%;
    }

    .form{
        font-size: 13px;
        font-family: Arial;
        padding: 2px;
        color: black;
        margin-left: 8%;
        margin-top: 10px;
    }

    .edit-img{
        width: 50%;
        margin-left: 8%;
    }

    .edit-link{
        font-size: 13px;
        font-family: Arial;
        padding: 2px;
        color: blue;
        margin-left: 8%;
    }

    .btn-btn-edit{
        font-size: 13px;
        font-family: Arial;
        text-align: justify;
        background-color: rgb(0, 255, 64);
        border-color: rgb(0, 255, 64);
        color: white;
        margin-left: 8%;
    }
</style>
</div>

</body>
</html>
