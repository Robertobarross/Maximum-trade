@extends('template'){{--Extenção do arquivo template--}}

@section('title', 'Minha Loja'){{--Extenção do título--}}

@section('content'){{--Conteúdo--}}



@auth


{{--{{ $empresaOwner['name'] }}--}}

{{ $empresa->empresa }}





@endauth

@endsection
