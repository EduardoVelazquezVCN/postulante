<?php
       session_start();

       if(!isset($_SESSION['rol'])){
           header('location: index.php');
       }else{
           if($_SESSION['rol'] != 2){
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
    <title>Registro postulate</title>

    <link rel="stylesheet" href="formulario.css">
    <!--Bootstrap 5 links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</head>

<body>
    <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="Formulario.html">Estancia 2022</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="Formulario.html">Formulario</a>
                
                        <a class="nav-link" href="#">Nosotros</a>
                        <form action="cerrarSesion.php" >
                            <input id="formcloseSesion" type="submit" class="nav-link"  name="sesionDestroy" value="Cerrar Sesion">
                        </form>
                        
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <form data-toggle="validator" action="Registrar.php" method="post" enctype="multipart/form-data">
        <!--Formulario completo-->
        <!--inputs brigada-->
        <p class="lead" id="titulo">
            DATOS BRIGADA
        </p>
        <div id="form">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="Brigadista" name="Brigadista" placeholder="Nombre">
                <label for="floatingInput">Nombre:</label>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <select name="selectBrigada[]" class="form-select" id="brigada" aria-label="Floating label select example" required>
                        <option selected>Abrir este menú de selección</option>
                        <option value="1">Brigada 1</option>
                        <option value="2">Brigada 2</option>
                        <option value="3">Brigada 3</option>
                        <option value="4">Brigada 4</option>
                        <option value="5">Brigada 5</option>
                        <option value="6">Brigada 6</option>
                        <option value="7">Brigada 7</option>
                        <option value="8">Brigada 8</option>
                        <option value="9">Brigada 9</option>
                        <option value="10">Brigada 10</option>
                        <option value="11">Brigada 11</option>
                        <option value="12">Brigada 12</option>
                        <option value="13">Brigada 13</option>
                        <option value="14">Brigada 14</option>
                        <option value="15">Brigada 15</option>
                        <option value="16">Brigada 16</option>
                    </select>
                    <label for="floatingSelectGrid">Seleccione su Brigada</label>
                </div>
            </div>
        </div>
        <!--inputs postulante-->
        <p class="lead" id="titulo">
            DATOS POSTULANTE
        </p>
        <div id="form">
            <p class="lead" id="subtitulo">Informacion General | Postulante</p>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre" name="Nombre" placeholder="Nombre">
                <label for="floatingInput">Nombre(s):</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="APaterno" name="ApellidoP" placeholder="Nombre">
                <label for="floatingInput">Apellido Paterno:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="AMaterno" name="ApellidoM" placeholder="Nombre">
                <label for="floatingInput">Apellido Materno:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="Curp" name="Curp" placeholder="Nombre">
                <label for="floatingInput">CURP:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="FechaN" name="FechaN" placeholder="Nombre">
                <label for="floatingInput">Fecha de nacimiento:</label>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <select class="form-select" name="selectGenero[]" id="Genero" aria-label="Floating label select example">
                        <option selected>Abrir este menú de selección</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                    <label for="floatingSelectGrid">Seleccione su Genero</label>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="Nacionalidad" id="Nacionalidad" placeholder="Nombre">
                <label for="floatingInput">Nacionalidad:</label>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <select class="form-select" name="selectEstadoCivil[]" id="ECivil" aria-label="Floating label select example">
                        <option selected>Abrir este menú de selección</option>
                        <option value="casado">Casado</option>
                        <option value="soltero">Soltero</option>
                        <option value="otro">otro</option>
                    </select>
                    <label for="floatingSelectGrid">Seleccione su Estado Civil</label>
                </div>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="CElectronico" placeholder="name@example.com">
                <label for="floatingInputGrid">Correo Electronico</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="Telefonofijo" id="Tfijo" placeholder="Nombre">
                <label for="floatingInput">Telefono fijo:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" name="TelefonoMovil" id="Tmovil" placeholder="Nombre">
                <label for="floatingInput">Telefono movil:</label>
            </div>

            <p class="lead" id="subtitulo">Dirección | Postulante</p>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="estado" name="Estado" placeholder="Nombre">
                <label for="floatingInput">Estado:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="municipio" name="Municipio" placeholder="Nombre">
                <label for="floatingInput">Municipio:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="localidad" name="Localidad" placeholder="Nombre">
                <label for="floatingInput">Localidad:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="codigoP" name="codigoP" placeholder="Nombre">
                <label for="floatingInput">Código Postal:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="colonia" name="Colonia" placeholder="Nombre">
                <label for="floatingInput">Colonia:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="calle" name="calle" placeholder="Nombre">
                <label for="floatingInput">Calle:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="NoExt" name="NoExt" placeholder="Nombre">
                <label for="floatingInput">Numero Exterior:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="NoInt" name="NoInt" placeholder="Nombre">
                <label for="floatingInput">Numero Interior:</label>
            </div>

            <p class="lead" id="subtitulo">Oficio | Postulante</p>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="masOficios" name="masOficios" placeholder="Nombre">
                <label for="floatingInput">¿Que oficio Desempeña?:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="telNegocio" name="telNegocio" placeholder="Nombre">
                <label for="floatingInput">Telefono del Negocio:</label>
            </div>

            <p class="lead" id="subtitulo">Referencias de trabajo | Postulante</p>

            <div class="form-floating mb-3">
                <input type="file" class="form-control" name="ReferenciaTrabajo1" id="ReferenciaTrabajo1" placeholder="Nombre">
                <label for="floatingInput">Referencia de trabajo:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" class="form-control" name="ReferenciaFamiliar" id="ReferenciaFamiliar" placeholder="Nombre">
                <label for="floatingInput">Referencia familiar:</label>
            </div>

            <p class="lead" id="subtitulo">Documentos | Postulante</p>

            <div class="form-floating mb-3">
                <input type="file" class="form-control" name="fotoKerkly" placeholder="Nombre">
                <label for="floatingInput">Foto:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" class="form-control" name="INEKerkly" placeholder="Nombre">
                <label for="floatingInput">Identificacion Oficial:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" class="form-control" name="curpKERKLY" placeholder="Nombre">
                <label for="floatingInput">CURP:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" class="form-control" name="comprobanteDomicilio" placeholder="Nombre">
                <label for="floatingInput">Comprobante de Domicilio:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" class="form-control" name="certificadoMedico" placeholder="Nombre">
                <label for="floatingInput">Certificado Medico:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" class="form-control" name="cartaAntePenales" placeholder="Nombre">
                <label for="floatingInput">Carta de Antecendentes Penales:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" class="form-control" name="regSatKERKLY" placeholder="Nombre">
                <label for="floatingInput">Constancia de Situacion Fiscal:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" class="form-control" name="comprobanteVacuna" placeholder="Nombre">
                <label for="floatingInput">Comprobante de Vacunacion:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" class="form-control" name="fotoDomicilioPart" placeholder="Nombre">
                <label for="floatingInput">Foto de Domicilio Particular:</label>
            </div>
            <div class="form-floating mb-3">
                <input type="file" class="form-control" name="fotoLocal" placeholder="Nombre">
                <label for="floatingInput">Foto de Negocio o Local:</label>
            </div>
        </div>

        <!--Boton que envia el formulario-->
        <div id="botonEnviar" >
            <button type="submit" class="btn btn-primary">Guardar Registro Postulante</button>  
        </div>
        
    </form>

</body>

</html>