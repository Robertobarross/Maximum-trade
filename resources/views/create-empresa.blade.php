@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Cadastrar Loja'){{--Extenção do título--}}

@section('content'){{--Conteúdo--}}

{{--Início da div criar empresa-----------------------------------------------------------------------------------------}}
<div id="criar-empresa">

    <h1 class="titulos-centro">CADASTRE SUA LOJA</h1>
    <form action="/empresas" method="POST" enctype="multipart/form-data">

            <br><label for="title" class="textos">Razão social</label>
            <br><input type="text" class="form-control" id="empresa" name="empresa" placeholder="Nome da empresa" required>

            <br><label for="title" class="textos">CPF</label>
            <br><input type="number" class="form-control" id="cpf" name="cpf" placeholder="Informe o CPF" required>

            <br><label for="title" class="textos">CNPJ</label>
            <br><input type="number" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ">

            <br><label for="title" class="textos">Endereço</label>
            <br><input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço da loja" required>

            <br><label for="title" class="textos">Cidade</label>
            <br><input type="text" class="form-control" id="cidade" name="cidade" placeholder="Nome da cidade" required>

            <br><label for="title" class="textos">Bairro</label>
            <br><input type="text" class="form-control" id="bairro" name="bairro" placeholder="Informe o bairro" required>

          {{--  <br><label for="title" class="textos">UF</label>
            <br><input type="text" class="form-control" id="uf" name="uf" placeholder="Estado, ex: SP" required> --}}

            <br><label for="title" class="textos">UF</label>
            <br><select name="uf" input type="text" class="#" id="uf" name="uf" required>
                <option value="estado">Selecione o Estado</option>
                <option value="ac">Acre</option>
                <option value="al">Alagoas</option>
                <option value="am">Amazonas</option>
                <option value="ap">Amapá</option>
                <option value="ba">Bahia</option>
                <option value="ce">Ceará</option>
                <option value="df">Distrito Federal</option>
                <option value="es">Espírito Santo</option>
                <option value="go">Goiás</option>
                <option value="ma">Maranhão</option>
                <option value="mt">Mato Grosso</option>
                <option value="ms">Mato Grosso do Sul</option>
                <option value="mg">Minas Gerais</option>
                <option value="pa">Pará</option>
                <option value="pb">Paraíba</option>
                <option value="pr">Paraná</option>
                <option value="pe">Pernambuco</option>
                <option value="pi">Piauí</option>
                <option value="rj">Rio de Janeiro</option>
                <option value="rn">Rio Grande do Norte</option>
                <option value="ro">Rondônia</option>
                <option value="rs">Rio Grande do Sul</option>
                <option value="rr">Roraima</option>
                <option value="sc">Santa Catarina</option>
                <option value="se">Sergipe</option>
                <option value="sp">São Paulo</option>
                <option value="to">Tocantins</option>
            </select>

            <br><label for="title" class="textos">Evento</label>
            <br><input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do evento" require>

            <br><label for="title" class="textos">Evento</label>
            <br><input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do evento" require>

            <br><label for="title" class="textos">Evento</label>
            <br><input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do evento">

            <br><label for="title" class="textos">Evento</label>
            <br><input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do evento">

            <br><label for="title" class="textos">Evento</label>
            <br><input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do evento">

            <br><label for="title" class="textos">Evento</label>
            <br><input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do evento">

            <br><label for="title" class="textos">Evento</label>
            <br><input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do evento">

            <input type="Submit" class="btn btn-primary" value="Criar Evento">

    </form>

</div>
{{--Fim da div criar empresa--------------------------------------------------------------------------------------------}}


@endsection {{--Conteúdo--}}
