@extends('layout.plantilla2')
@section('contenido')

<body style="background-color: #e1f3e1;overflow: hidden">
       
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <center><h1 class="display-4" style="font-family: 'Teko', sans-serif;">CURSOS EN NAHUATL</h1></center>
    </div>
    <br>
    <div class="container:100%" >
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./public/img/abecedario_b.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Grafías de la lengua Náhuatl</h5>
                        <p class="card-text"  style="text-align:justify">El alfabeto practico consiste en 19 grafías para 19 fonemas propios del náhuatl.</p>
                        
                        <a href="curso_1.php"><button type="button" class="btn btn-outline-dark btn-block" href="curso_1.php">Ir acurso</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
