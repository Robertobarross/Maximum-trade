<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Maximum-trade')</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>

</head>
<body>



    {{--Início da div top-----------------------------------------------------------------------------------------------}}
    <div id="topo">
        <div class="topo">
            <img src="img/logo.jpeg" class="logo" alt="">
        </div>

        <div class="menu">
            @guest
            <a href="/dashboard" class="links-menu">LOGIN</a> <a href="/register" class="links-menu">CADASTRO</a>
            @endguest

            <a href="/" class="links-menu">INICIO</a>

            @auth {{--Arquivo logout, para encerrar a sessão--}}
            <form action="/logout" method="POST">
                @csrf
                <a href="/logout" class="links-menu" onclick="event.preventDefault(); this.closest('form').submit();">SAIR</a>
            </form>
            @endauth
        </div>
    {{--Fim da div top--------------------------------------------------------------------------------------------------}}




    @yield('content'){{--Onde vaificar o conteúdo exposto nas outras páginas, para não ficar a mesma do template--------}}




    {{--Início da div centro--------------------------------------------------------------------------------------------}}
    <div id="centro">

    </div>
    {{--Fim da div centro-----------------------------------------------------------------------------------------------}}




    {{--Início da div rodapé--------------------------------------------------------------------------------------------}}
    <div id="rodape">
        <h1 class="textos">&COPY; 2021 | E-Commerce | Maximum-trade | Todos os direitos reservados</h1>
    </div>
    {{--Fim da div rodapé-----------------------------------------------------------------------------------------------}}




</body>
</html>
