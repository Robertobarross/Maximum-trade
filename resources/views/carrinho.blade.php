@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Meu carrinho'){{--Extenção do título--}}

@section('content'){{--Conteúdo--}}

<h1 class="titulos-carrinho">Meu Carrinho</h1>

@if (session('msg')){{--Mensagem de atualização do produto--}}
    <p class="texto-form">{{ session('msg') }}</p>
    @endif

<div class="produto-carrinho">

{{--Declarando variáveis para postagem dos produtos do carrinho--}}
    @if(count($carrinhos) > 0)
    @foreach ($carrinhos as $carrinho)
    <div id="meu-carrinho">

        <form action="/carrinhos" method="post" enctype="multipart/form-data">
        @csrf

        <h1 class="titulos-carrinho">Produto:
        <input type="Text" id="prod" name="prod" class="prod-carrinho" value="<?php echo  $carrinho->prod ?>" readonly/></h1>

        {{ $carrinho->foto }}

        <h2 class="titulos-carrinho">Valor unitário:
        <input type="Text" id="prod" name="prod" class="prod-carrinho" value="<?php echo  $carrinho->valor ?>" readonly/></h2>

        <h3 class="titulos-carrinho">Data do cadastro do produto:
        <input type="Text" id="prod" name="prod" class="prod-carrinho" value="<?php echo $carrinho->dt ?>" readonly/></h3>

        <h4 class="titulos-carrinho">Observações:
        <input type="Text" id="prod" name="prod" class="prod-carrinho" value="<?php echo  $carrinho->obs ?>" readonly/></h4>

        <h5 class="titulos-carrinho">Código do produto:
        <input type="Text" id="prod" name="prod" class="prod-carrinho" value="<?php echo  $carrinho->idprod ?>" readonly/></h5>

        <h5 class="titulos-carrinho">Quantidade:
        <input type="text" id="quant" name="quant" value="">

        <h5 class="titulos-carrinho">Valor total:
        <input type="text" id="total" name="total" class="prod-carrinho" value="" readonly/>

        <p><button class="btn-comprar">Comprar</button>

        </form>

        {{--Formulário com botão deletar item--}}
        <form action="/carrinhos/{{ $carrinho->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-exluir-produto-carrinho">Deletar</button>
        </form>
        <hr></hr>

    </div>
    @endforeach
    @endif

</div>

@endsection {{--Conteúdo--}}
