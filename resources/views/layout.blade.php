<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Laravel</title>

    <!-- Link  BootStrapp-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Link Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('scriptsjs')
</head>

<body>
    <nav class="navbar navbar-ligth navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="{{ route('home') }}" class="navbar-brand">MyShop</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('categoria') }}">Categorias</a>
                <a class="nav-link" href="{{ route('cadastrar') }}">Cadastro</a>
                @if(!\Auth::user())
                    <a class="nav-link" href="{{ route('logar') }}">Logar</a>
                @else
                    <a class="nav-link" href="{{ route('sair') }}">Logout</a>
                @endif
            </div>
        </div>
         <a href="{{ route('ver_carrinho') }}" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>    
    </nav>
    <div class="container">
        <div class="row">
        <!-- Verifica se o usuário está logado imprime mens Bem vindo -->
            @if(\Auth::user())
                <div class="col-12">
                    <p class="text-rigth">Seja bem vindo,  {{ \Auth::user()-> nome}}  - <a href="{{ route('sair') }}">Sair</a></p>
                </div>
            @endif
           
        <!-- Verificando o login já esixte e imprimindo mensagem-->
            @if($message = Session::get('err'))
                <div class="col-12">
                    <div class="alert alert-danger"> {{ $message }} </div>
                </div>
            @endif
            <!-- Verificando o login já esixte e imprimindo mensagem-->
            @if($message = Session::get('ok'))
                <div class="col-12">
                    <div class="alert alert-success"> {{ $message }} </div>
                </div>
            @endif
            <!--Área de conteudo dos outros arquivos-->
            @yield('conteudo')
        </div>
    </div>
</body>
</html>
