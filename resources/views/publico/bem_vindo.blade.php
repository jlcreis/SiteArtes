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
        
        <link href="/css/estiloPublico.css" rel="stylesheet" type="text/css">

    </head>

    <body>
        <header>
                <div class="container-fluid">
                    <div class="row zsx">
                        <div class="col-lg-12 animated lightSpeedIn">
                            <a href="#"><img src="img/css/logo_artesanato.jpg" width="50%"></a>
                        </div>
                    </div>
                </div>
        </header>
        <nav class="navbar navbar-default navbar-static">
            <div class="navbar-header">
                
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>


            <div class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">Destaques</a></li> 
                    <li class="dropdown dropdown-large">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos <b class="caret"></b></a>
                        <ul class="dropdown-menu dropdown-menu-large row">
                            <li class="col-dm-3">
                                <ul>
                                    <li><a href="/listaProdutos">Todos os produtos</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Categorias</li>
                                    @foreach ($categorias as $c)
                                    <li><a href="#">{{$c->categoria}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            
                        </ul>

                    </li>
                    <li><a href="/quem_somos">Quem Somos</a></li>
                    <li><a href="/onde_comprar">Onde comprar</a></li>
                </ul>

            </div><!-- /.nav-collapse -->
        </nav>
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">Área privada</a>
            @else
                <a href="{{ url('/login') }}">Administrador</a>
            @endif
        </div>
        
        <div class="container">            
            @yield('conteudo')
        </div> 
        
        
        	
        
        <!-- Scripts -->    
        <script type="text/javascript" src="/jquery/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="/jquery/jquery.mask.min.js"></script>
        <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/scriptPublico.js"></script>
        
    </body>
    
</html>