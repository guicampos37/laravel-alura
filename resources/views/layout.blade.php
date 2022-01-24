<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 justify-content-between">
        <a class="navbar-brand" href="{{ route('listar_series') }}">Home</a>
        {{-- @auth Verifica se o usuário está logado, se sim, ele exibirá o botão de sair --}}
        @auth
        <a href="/sair" class="text-danger">Sair</a>
        @endauth

        {{-- @guest Verifica se o usuário está deslogado, se sim, ele exibirá o botão de entrar --}}
        @guest
        <a href="/entrar">Entrar</a>
        @endguest
    </nav>

    <div class="container">

        {{-- h1 da Página --}}

        <div class="jumbotron">
            <h1>@yield('cabecalho')</h1>
        </div>

        {{-- Conteúdo da Página --}}

        @yield('conteudo')
        
    </div>
</body>
</html>