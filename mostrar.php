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
                    <div>
                        <p>
        
                            <table id="table" class="table table-striped">
                                
                                <tbody>
                                    <tr>
                                    <th scope="row"><?php echo $id_postulante;?></th>
                                    <td><?php echo $Nombre, ' ' , $Apellido_Paterno, ' ', $Apellido_Materno;?></td>
                                    <td><?php echo $masOficios;?></td>
                                    <td><?php echo $Colonia;?></td>
                                    <td><?php echo $telNegocio;?></td>
                                    <td><?php echo $Telefono;?></td>
                                    <td><?php echo $fotoLocal;?></td>
                                    <td><?php echo $fechaRegistro;?></td>
                                    </tr>
                                </tbody>
                            </table>

                        </p>
                    </div>
                </div>
                <?php
            }
        }
    }



?>