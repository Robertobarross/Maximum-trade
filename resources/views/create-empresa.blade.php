@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Cadastrar Loja'){{--Extenção do título--}}

@section('content'){{--Conteúdo--}}

{{--Início da div criar empresa-----------------------------------------------------------------------------------------}}
<div id="criar-empresa">

    <p></p><h1 class="titulos-form">CADASTRE SUA LOJA</h1>
    <form action="/empresas" method="POST" enctype="multipart/form-data">

            <br><label for="title" class="titulos-form">Razão social</label>
            <br><input type="text" class="form-empresa" id="empresa" name="empresa" placeholder="Nome da empresa" required>

            <p></p><label for="title" class="titulos-form">CPF</label>
            <br><input type="number" class="form-empresa" id="cpf" name="cpf" placeholder="Informe o CPF" required>

            <p><label for="title" class="titulos-form">CNPJ</label>
            <br><input type="number" class="form-empresa" id="cnpj" name="cnpj" placeholder="CNPJ">

            <p><label for="title" class="titulos-form">Endereço</label>
            <br><input type="text" class="form-empresa" id="endereco" name="endereco" placeholder="Endereço da loja" required>

            <p><label for="title" class="titulos-form">Cidade</label>
            <br><input type="text" class="form-empresa" id="cidade" name="cidade" placeholder="Nome da cidade" required>

            <p><label for="title" class="titulos-form">Bairro</label>
            <br><input type="text" class="form-empresa" id="bairro" name="bairro" placeholder="Informe o bairro" required>

            <p><label for="title" class="titulos-form">UF</label>
            <br><input type="text" class="form-empresa" id="uf" name="uf" placeholder="Informe o estado" required>

            <p><label for="title" class="titulos-form">Proprietário</label>
            <br><input type="text" class="form-empresa" id="proprietario" name="proprietario" placeholder="Informe o nome do proprietário" required>

            <p><label for="title" class="titulos-form">Número</label>
            <br><input type="number" class="form-empresa" id="numero" name="numero" placeholder="Inserir número" required>

            <p><label for="title" class="titulos-form">Contrato Social</label>
            <br><input type="text" class="form-empresa" id="contratosocial" name="contratosocial" placeholder="Insira o número do contrato">

            <p><label for="title" class="titulos-form">Registro Comercial</label>
            <br><input type="text" class="form-empresa" id="registrocomercial" name="registrocomercial" placeholder="Registro da junta comercial">

            <p><label for="title" class="titulos-form">Inscrição Estadual</label>
            <br><input type="text" class="form-empresa" id="inscricaoestadual" name="inscricaoestadual" placeholder="Número da inscrição estadual">

            <p><label for="title" class="titulos-form">Alvará</label>
            <br><input type="text" class="form-empresa" id="alvara" name="alvara" placeholder="Número do alvará">

            <p><label for="title" class="titulos-form">Complemento</label>
            <br><textarea name="complemento" id="complemento" cols="30" rows="10" class="form-empresa" placeholder="Informações adicionais..."></textarea>

            <p><input type="Submit" class="btn-btn" value="CADASTRAR"></p>

    </form>

</div>
{{--Fim da div criar empresa--------------------------------------------------------------------------------------------}}


@endsection {{--Conteúdo--}}
