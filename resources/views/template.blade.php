<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Maximum-trade')</title>

    {{--Extensão do arquivo CSS-----------------------------------------------------------------------------------------}}
    <link rel="stylesheet" href="css/style.css">
    {{--Extensão do arquivo CSS-----------------------------------------------------------------------------------------}}
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
            <a href="/dashboard" class="links-menu">Login</a>
            <a href="/register" class="links-menu">Cadastre-se</a>
            @endguest

            {{--<a href="/create-empresa" class="links-menu">Cadastrar Loja</a>--}}
            <a href="/" class="links-menu">Inicio</a>

            @auth {{--Arquivo logout, para encerrar a sessão--}}
            <form action="/logout" method="POST">
            @csrf

            <a href="/logout" class="links-menu" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
            </form>
            @endauth
        </div>
    {{--Fim da div top--------------------------------------------------------------------------------------------------}}




    @yield('content'){{--Onde vaificar o conteúdo exposto nas outras páginas, para não ficar a mesma do template--------}}




    {{--Início da div centro--------------------------------------------------------------------------------------------}}
    <div id="centro">
        {{--aqui vão ficar os links para outras pesquisas, tais como: quem somos, contato, etc. --}}
        <div class="div-links-centro">
            <h1 class="titulos-centro">EMPRESA</h1>
            <a href="#" class="links-centro">História</a>
            <br><a href="#" class="links-centro">Novidades</a>
            <br> <a href="#" class="links-centro">Sobre</a></br>
        </div>

        <div class="div-links-centro">
            <h2 class="titulos-centro">QUEM SOMOS</h2>
            <a href="#" class="links-centro">Liderança</a>
            <br><a href="#" class="links-centro">Perfil</a>
            <br><a href="#" class="links-centro">Nossa visão</a>
        </div>

        <div class="div-links-centro">
            <h2 class="titulos-centro">CONTATO</h2>
            <a href="#" class="links-centro">E-mail</a>
            <br><a href="#" class="links-centro">0800 003 021</a>
            <br><a href="#" class="links-centro">WhatsApp</a>
        </div>

        <div class="div-links-centro">
            <h2 class="titulos-centro">AJUDA</h2>
            <a href="#" class="links-centro">Perguntas frequentes</a>
            <br><a href="#" class="links-centro">Suporte</a>
            <br><a href="#" class="links-centro">SAC</a>
        </div>

    </div>
    {{--Fim da div centro-----------------------------------------------------------------------------------------------}}




    {{--Início da div rodapé--------------------------------------------------------------------------------------------}}
    <div id="rodape">
        <h1 class="textos">&COPY; 2021 | E-Commerce | Maximum-trade | Todos os direitos reservados</h1>
    </div>
    {{--Fim da div rodapé-----------------------------------------------------------------------------------------------}}




</body>
</html>
