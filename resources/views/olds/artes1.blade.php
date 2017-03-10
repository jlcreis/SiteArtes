<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Artesanato</title>

        <!-- estilo -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/style.css" rel="stylesheet" type="text/css">

        <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/estilo.css" rel="stylesheet" type="text/css">

    </head>

    <body>
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Sair</a>
            @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
        <div class="container">
            <div class="title m-b-md">
                <a href="/">Artesanato</a>
            </div>
                
            <div class="links">
                <a href="/home">Home</a>
                <a href="{{action('CategoriasController@lista')}}">Categorias</a>
                <a href="{{action('CategoriasController@novo')}}">Nova Categoria</a>
                <a href="{{action('ProdutoController@lista')}}">Produtos</a>
                <a href="{{action('ProdutoController@novo')}}">Novo Produto</a>
            </div>
             @yield('conteudo')   
        </div>        
    </body>
    
</html>