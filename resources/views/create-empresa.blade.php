@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Cadastrar Loja'){{--Extenção do título--}}

@section('content'){{--Conteúdo--}}

{{--Início da div criar empresa-----------------------------------------------------------------------------------------}}
<div id="criar-empresa">

    <p></p><h1 class="titulos-form">Cadastre sua Loja</h1>
    <form action="/empresas" method="POST" enctype="multipart/form-data">
        @csrf

            <input type="text" class="form-empresa" id="empresa" name="empresa" placeholder="Nome da empresa" required>

            <input type="text" class="form-empresa" id="cpf" name="cpf" placeholder="Informe o CPF" maxlength="11" required>

            <input type="text" class="form-empresa" id="cnpj" name="cnpj" placeholder="CNPJ" maxlength="14">

            <input type="text" class="form-empresa" id="endereco" name="endereco" placeholder="Endereço da loja" required>

            <input type="text" class="form-empresa" id="cidade" name="cidade" placeholder="Nome da cidade" required>

            <input type="text" class="form-empresa" id="bairro" name="bairro" placeholder="Informe o bairro" required>

            <input type="text" class="form-empresa" id="uf" name="uf" placeholder="Informe o estado" required>

            <input type="text" class="form-empresa" id="proprietario" name="proprietario" placeholder="Informe o nome do proprietário" required>

            <input type="number" class="form-empresa" id="numero" name="numero" placeholder="Inserir número" required>

            <input type="text" class="form-empresa" id="contratosocial" name="contratosocial" placeholder="Insira o número do contrato social">

            <input type="text" class="form-empresa" id="registrocomercial" name="registrocomercial" placeholder="Registro da junta comercial">

            <input type="text" class="form-empresa" id="inscricaoestadual" name="inscricaoestadual" placeholder="Número da inscrição estadual">

            <input type="text" class="form-empresa" id="alvara" name="alvara" placeholder="Número do alvará">

            <input type="text" class="form-complemento" id="complemento" name="complemento" maxlength="100" placeholder="Complemento... com no máximo 100 carateres">

            <p><input type="Submit" class="btn-btn" value="Cadastre"></p>

    </form>

</div>
{{--Fim da div criar empresa--------------------------------------------------------------------------------------------}}


@endsection {{--Conteúdo--}}
