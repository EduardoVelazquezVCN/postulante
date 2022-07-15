<?php
    $inc =include_once("conexionDB.php");

    if($inc){
        $consulta = "SELECT * FROM postulante";
        $resultado = mysqli_query($con,$consulta);
        if($resultado){
            while($row = $resultado->fetch_array()){
                $id_postulante  = $row['id_postulante'];
                $brigadista = $row['brigadista'];
                $brigada = $row['brigada'];
                $Curp = $row['Curp'];
                $Nombre = $row['Nombre'];
                $Apellido_Paterno = $row['Apellido_Paterno'];
                $Apellido_Materno  = $row['Apellido_Materno'];
                $Telefono = $row['Telefono'];
                $TelefonoCasa = $row['TelefonoCasa'];
                $No_RFC = $row['No_RFC'];
                $FotoDelKerkly = $row['FotoDelKerkly'];
                $Genero = $row['Genero'];
                $Nacionalidad  = $row['Nacionalidad'];
                $EstadoCivil = $row['EstadoCivil'];
                $FechaDeNacimiento = $row['FechaDeNacimiento'];
                $correo_electronico = $row['correo_electronico'];
                $telNegocio = $row['telNegocio'];
                $Referencia1 = $row['Referencia1'];
                $ReferenciaFam  = $row['ReferenciaFam'];
                $fotoKEKRLY = $row['fotoKEKRLY'];
                $TelefonoCasa = $row['TelefonoCasa'];
                $No_RFC = $row['No_RFC'];
                $FotoDelKerkly = $row['FotoDelKerkly'];
                $ineKERKLY = $row['ineKERKLY'];
                $curpKERKLY = $row['curpKERKLY'];
                $comprobanteDomicilio  = $row['comprobanteDomicilio'];
                $certificadoMedico = $row['certificadoMedico'];
                $FechaDeNacimiento = $row['FechaDeNacimiento'];
                $cartaAntePenales = $row['cartaAntePenales'];
                $regSatKERKLY = $row['regSatKERKLY'];
                $comprobanteVacuna  = $row['comprobanteVacuna'];
                $fotoDomicilioPart = $row['fotoDomicilioPart'];
                $fotoLocal = $row['fotoLocal'];
                $masOficios = $row['masOficios'];
                $Ciudad = $row['Ciudad'];
                $Estado = $row['Estado'];
                $Pais = $row['Pais'];
                $Calle = $row['Calle'];
                $Colonia  = $row['Colonia'];
                $No_Interior = $row['No_Interior'];
                $No_Exterior = $row['No_Exterior'];
                $Codigo_Postal = $row['Codigo_Postal'];
                $Municipio = $row['Municipio'];
                $fechaRegistro = $row['fechaRegistro'];
                ?>
                <div>
                    <h3><?php echo 'Brigadista: ' ,$brigadista , ' | Brigada:  ', $brigada , ' | Fecha de Registro:  ', $fechaRegistro;?></h3>
                    <div>
                        <p>
                            <b>id: </b><?php echo $id_postulante;?><br>
                            <b>Nombre postulante: </b><?php echo $Nombre, ' ' , $Apellido_Paterno, ' ', $Apellido_Materno;?><br>
                            <b>Oficios: </b><?php echo $masOficios;?><br>
                            <b>Colonia: </b><?php echo $Colonia;?><br>
                            <b>Telefono Negocio: </b><?php echo $telNegocio;?><br>
                            <b>Correo Electronico: </b><?php echo $correo_electronico;?><br>
                            <b>Foto local: </b><?php echo $fotoLocal;?><br>
                            <b>Estado Civil: </b><?php echo $EstadoCivil;?><br>

                        </p>
                    </div>
                </div>
                <?php
            }
        }
    }



?>