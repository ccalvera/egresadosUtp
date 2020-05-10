<!doctype html>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- awesone fonts css-->
    <link href="/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- owl carousel css-->
    <link rel="stylesheet" href="/owl-carousel/assets/owl.carousel.min.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- custom CSS -->
    <link rel="stylesheet" href="/css/styleIndex.css">
    <title>Egresados UTP</title>
    <style>

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light bg-transparent" id="gtco-main-nav">
    <div class="container"><a class="navbar-brand">Egresados UTP</a>
        <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"><span
                class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span></button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contacto')}}">Contacto</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="{{route('login')}}" class="btn btn-outline-dark my-2 my-sm-0 mr-3 text-uppercase">Ingresar</a> 
                <a href="{{route('register')}}" class="btn btn-info my-2 my-sm-0 text-uppercase">Registro</a>
            </form>
        </div>
    </div>
</nav>

@yield('content')

<footer class="container-fluid" id="gtco-footer">
    
    <div class="col-12">
        <p>&copy; 2020. Todos los derechos reservados. Creado por CMDE SOft</p>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/js/jquery-3.3.1.slim.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<!-- owl carousel js-->
<script src="/owl-carousel/owl.carousel.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>