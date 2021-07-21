@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Minha Loja'){{--Extenção do título--}}

@section('content'){{--Conteúdo--}}

<div>
    @csrf


{{ $empresa->id }}

</div>


<h1>Aulas 22 até 25, para resolver autenticação de usuário</h1>





@endsection
