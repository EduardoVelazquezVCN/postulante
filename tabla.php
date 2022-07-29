<?php
       session_start();

       if(!isset($_SESSION['rol'])){
           header('location: index.php');
       }else{
           if($_SESSION['rol'] != 1){
               header('location: index.php');
           }
       }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="mostrar.css">

     <!--Bootstrap 5 links-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>Registros</title>
</head>
<body>
    <header id="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="Formulario.html">Registros 2022</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           
                            <form action="cerrarSesion.php" >
                                <input id="formcloseSesion" type="submit" class="nav-link"  name="sesionDestroy" value="Cerrar Sesion">
                            </form>
                            
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <hr>
    <h1>Registros</h1>
    <hr>
    <!-- 
    <table id="table" class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Postulante</th>
                <th scope="col">Oficios</th>
                <th scope="col">Colonia</th>
                <th scope="col">Tel Negocio</th>
                <th scope="col">Tel Movil</th>
                <th scope="col">Foto local</th>
                <th scope="col">Fecha</th>
            </tr>
        </thead>
                                
    </table>-->
    <?php
    include_once("mostrar.php");
    ?>
    <div id="descargaExcel">
         <form action="exportarTablaPostulante.php" >
        <input id="crearExcel" type="submit" class="nav-link"  name="sesionDestroy" value="Descargar Archivo .XLSX">
    </form>
    </div>
   
    <!--<script src="exportarExcel.js"></script>
    <button onclick="exportTableToExcel('table')">Export Table Data To Excel File</button>
    -->
</body>
</html>