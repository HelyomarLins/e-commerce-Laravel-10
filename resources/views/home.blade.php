<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce - Laravel 10</title>

    <!-- Link  BootStrapp-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Link Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
             integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
            crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<!--Desenvolvendo Menu Navbar-->
    <nav class="navbar navbar-ligth navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">MyShopp</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a href="#" class="nav-link">Home</a>
                <a href="#" class="nav-link">Categorias</a>
                <a href="#" class="nav-link">Cadastrar</a>
            </div>
        </div>
        <a href="#" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
    </nav>
<!--Desenvolvendo Cards de Produtos-->
<div class="container">
    <div class="row">
       <div class="col-3 mb-3">
        <div class="card">
            <img src="{{ asset('images/T-shirt Preta.jpg') }}" class="card-img-top" alt="T-shirt Preta">
        </div>
       </div>
    
    </div>

</div>

</body>
</html>

