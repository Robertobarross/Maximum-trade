@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Maximum-trade'){{--Extenção do título--}}

@section('content'){{--Conteúdo--}}

@if(count($empresas) > 0)
@foreach ($empresas as $empresa)

{{ $empresa->empresa }}

@endforeach

@else{{--Se o usuário não tiver loja cadastrada, será emitida a mensagem a baixo--}}
<p>Você ainda não tem loja cadstrada, <a href="/create-empresa">Cadastrar Loja</a></p>
@endif


@endsection {{--Conteúdo--}}
