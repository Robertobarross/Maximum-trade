@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Minha Loja'){{--Extenção do título--}}

@section('content'){{--Conteúdo--}}

<div>
    @csrf


{{ $empresa->empresa }}

</div>


<h1>24</h1>





@endsection
