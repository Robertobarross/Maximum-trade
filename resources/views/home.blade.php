@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Home'){{--Extenção do título--}}

@section('content'){{--Conteúdo--}}

{{--Incluindo imagem merchandising--}}
<div id="merchandising">
    <img src="/pasta-img/img/merchandising.png" alt="merchandising" class="img-merchandising">
</div>


{{--Aqui na home estão disponíveis todos os produtos--}}
<div id="home-produtos">
    
@if (session('msg')){{--Mensagem de atualização do produto--}}
    <p class="texto-form">{{ session('msg') }}</p>
    @endif


@if(count($produtos) > 0)
@foreach ($produtos as $produto)
<div id="produtos-home" align="center">

    {{--Criei um form com os dados do produto para fazer a ponte entre o bd e o carrinho--}}
    <img src="/pasta-img/img/{{ $produto->foto }}" alt="{{ $produto->foto }}" class="img-produtos-home">
<form action="/carrinhos" method="post" enctype="multipart/form-data">
    @csrf

    <h1 class="prod-home">Produto:</h1>
    <br><input type="Text" id="prod" name="prod" class="prod-home" value="<?php echo  $produto->prod ?>" readonly/>

    <h2 class="prod-home">Especificações:</h2>
    <br><input type="Text" id="informe" name="informe" class="prod-home" value="<?php echo  $produto->informe ?>" readonly/>

    <h3 class="prod-home">Valor:</h3>
    <br><input type="text" id="valor" name="valor" class="prod-home" value="<?php echo $produto->valor ?>" readonly/>

    <h4 class="prod-home">Data da postagem:</h4>
    <br><input type="text" id="dt" name="dt" class="prod-home" value="<?php echo $produto->dt ?>" readonly/>

    <h5 class="prod-home">Observações:</h5>
    <br><input type="text" id="obs" name="obs" class="prod-home" value="<?php echo  $produto->obs ?>" readonly/>

    <br><button class="btn-produtos">Comprar</button>


</form>
</div>
@endforeach
@endif
</div>

@endsection {{--Conteúdo--}}
