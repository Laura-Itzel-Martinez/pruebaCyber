<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./public/css/style1.css">
    <link rel="stylesheet" href="./public/css/style5.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/login.css">
    <link rel="stylesheet" href="./librerias/jquery-ui-1.12.1/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="./librerias/jquery-ui-1.12.1/jquery-ui.css">
        
    <title>registro usuario </title>
  </head>
  <body>

    <div class="container">
        <br>
        <h1 style="text-align: center;">Registro de usuario</h1>
        <hr>
        <div class="row ">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">

                <form action="{{route('store')}}" method="post" >
            
                    @csrf
                    
                    <div class="row">
                        <div class="col text-center">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                        </div>
                        <div class="col text-center" >
                            <label for="apaterno">Apellido paterno</label>
                            <input type="text" class="form-control" name="paterno" id="paterno" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <label for="amaterno">Apellido Materno</label>
                            <input type="text" class="form-control" name="materno" id="materno" required>
                        </div>
                        
                        <div class="col text-center">
                            <label for="sexo" >Sexo</label>
                            <select name="sexo" id="sexo" class="form-control" required>
                                <option values=>Selecciona tu sexo</option>
                                <option values="femenino">Femenino </option>
                                <option values="masculino">Masculino </option>
                            </select> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" required>
                        </div>
                        <div class="col text-center">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" required> 
                        </div>
                        <div class="col text-center">
                            <label for="password">password</label>
                            <input type="text" class="form-control" name="password" id="password" required> 
                        </div>
                    </div>
                    <div class="row"><div class="col"><br></div></div>
                    <div class="row">
                        <div class="col">
                            <button  class="btn btn-primary btn-block text-uppercase">Registrar</button>
                        </div> 
                        <div class="col">
                            <a href="{{route('index')}}"  class="btn btn-danger btn-block">CANCELAR</a>
                        </div>  
                    </div>  
                </form>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div> 
    </body>
</html>

