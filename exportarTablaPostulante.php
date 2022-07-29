<?php
    include_once 'conexionDB.php'; 
    
    $consulta = "SELECT * FROM postulante";
    $resultado = mysqli_query($con,$consulta);
    $nombreArchivoExcel="postulantes.xls";        
    header('Content-type: application/vnb.ms-excel');
    header('Content-Disposition: attachment; filename='.$nombreArchivoExcel);
    header('Pragma: no-cache');
    header('Expires: 0');

    echo '<table border=1>';
    echo '<tr>';
    echo '<th colspan=9 style="font-weight:bold" style="color:#ffffff" style="background-color:#256D7B"> Reporte Postulantes </th>';
    echo '</tr>';
    echo '<tr style="color:#003e25" style="background-color:#d3f5a7"> 
            <th> Id </th> 
            <th> Brigada </th> 
            <th> Postulante </th> 
            <th> Oficios </th> 
            <th> Colonia </th> 
            <th> Tel Negocio </th> 
            <th> Tel movil </th> 
            <th> Foto local </th> 
            <th> Fecha </th> 
          </tr>';
    
    while($row = $resultado->fetch_array()){ 
        echo '<tr>';  
        echo '<td>'.$row['id_postulante'].'</td>';
        echo '<td>'.$row['brigada'].'</td>';
        echo '<td>'.$row['Nombre'].'</td>';
        echo '<td>'.$row['masOficios'].'</td>';
        echo '<td>'.$row['Colonia'].'</td>';
        echo '<td>'.$row['telNegocio'].'</td>';
        echo '<td>'.$row['Telefono'].'</td>';
        echo '<td>'.$row['fotoLocal'].'</td>';
        echo '<td>'.$row['fechaRegistro'].'</td>';
        echo '</tr>';
    }
    echo '</table>';

    

?>