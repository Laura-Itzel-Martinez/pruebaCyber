<!doctype html>
<html lang="en">
    <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="./public/css/style1.css">
    <link rel="stylesheet" href="./public/css/style5.css">
    <link rel="stylesheet" href="./librerias/bostrap4/bootstrap.min.css">
    <link rel="stylesheet" href="./librerias/fontawesome/css/all.css">
    <link rel="stylesheet" href="./librerias/dataTable/dataTables.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Josefin+Sans:wght@300&family=Montserrat:wght@500&family=Oswald:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Tangerine:wght@700&family=Titillium+Web:ital,wght@1,200&display=swap" rel="stylesheet">
    </head>
     <!-- pagina principal es decir el inicio -->
    <body style="overflow-x: hidden;">
    
        <div class="container fixed:100%">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top fixed-top navbar-responsive">
                    <div class="col-sm-3">
                        <img class="" src="{{asset('img/logo.jpg')}}" width="100px" alt="">
                        <a class="navbar-brand" href="index.php">
                            CyberNahualt
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="col-sm-3"></div>
                    <div class="col mt-1">
                        <ul class="navbar-nav ml-auto">
                            <div class="col"></div>
                            <div class="col"></div>
                            <div class="col"></div>
                            <div class="col">
                                <li class="nav-item active">
                                    <a href="{{route('create')}}" 
                                    class="btn btn-primary btn-lg active" 
                                    role="button" aria-pressed="true">Registrar</a>

                                </li>
                            </div>
                            <div class="col">
                                <li class="nav-item active">
                                    <a class="nav-link" href="login/ingreso.php">
                                        <span class="btn btn-warning" data-toggle="modal" href="/ingreso.php">
                                            Registrar
                                        </span>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </nav>   
            </div>
        </div> 
     <!--contenido -->
     @yield('contenido')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./librerias/jquery-3.6.0.min.js"></script>
    <script src="./librerias/bostrap4/popper.min.js"></script>
    <script src="./librerias/bostrap4/bootstrap.min.js"></script>
    <script src="./librerias/sweetalert.min.js"></script>
    <script src="./librerias/dataTable/jquery.dataTables.min.js"></script>
    <script src="./librerias/dataTable/dataTables.bootstrap4.min.js"></script>
   
    </body>
</html>      