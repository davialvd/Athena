<?php
    require '../../Modelo/model_estudiante.php';

    $MU = new Modelo_Estudiante();
  
    $consulta = $MU->listar_pais_nacimiento();

        
        echo json_encode($consulta);
        # code...
   
 
    

?>