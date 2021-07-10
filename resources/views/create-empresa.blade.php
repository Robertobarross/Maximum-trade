@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Cadastrar Loja'){{--Extenção do título--}}

@section('content'){{--Conteúdo--}}

<div id="criar-empresa">
    <h1 class="titulos">CADASTRE SUA LOJA</h1>
    <form action="/empresas" method="POST" enctype="multipart/form-data">
</div>


@endsection {{--Conteúdo--}}
