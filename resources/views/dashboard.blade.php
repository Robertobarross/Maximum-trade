@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Maximum-trade'){{--Extenção do título--}}

@section('content'){{--Conteúdo--}}

<h1>teste</h1>

if(count($empresas) > 0)
foreach (@empresas as @empresa)

{{ $empresa->empresa }}

endforeach

else{{--Se o usuário não tiver nem uma empresa cadastrada, será emitida a mensagem a baixo--}}
<p>Você ainda não tem empresa cadastrada, <a href="/inserir">Inserir horas</a></p>
endif

@endsection {{--Conteúdo--}}
