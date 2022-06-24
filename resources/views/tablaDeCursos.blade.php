@extends('layout.plantilla2')
@section('contenido')

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            
            <div class="row">
                <div class="col">
                    <h1 class="display-4 text-center"><strong>CURSO 1: GRAFIAS</strong></h1>
                </div>

            </div>
            
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="table-responsive">
                        <table class="table  table-hover table-dark text-center" id="t_clases" style="border-radius: 20px;"> 
                            <thead>
                                <tr>
                                    <th>N. Clase</th>
                                    <th>Nombre de la clase</th>
                                    <th>Tomar clase</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Grafias Nahuatl</td>
                                    <td><div class="text-center"><a button type="submit" class="btn btn-success" href="alfabeto.php">Empezar clase</a></div><br></td>
                                    
                                    
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td></td>
                                    <td><div class="text-center"><a button type="submit" class="btn btn-success" href="#">Empezar clase</a></div><br></td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

<script >
    $(document).ready(function(){
        $('#t_clases').DataTable();
    })
</script>

@endsection
