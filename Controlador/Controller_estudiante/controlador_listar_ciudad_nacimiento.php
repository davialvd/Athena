<?php
    require '../../Modelo/model_estudiante.php';

    $MU = new Modelo_Estudiante();
  
    $consulta = $MU->listar_ciudad_nacimiento();

        
        echo json_encode($consulta);
        # code...
   
 
    

?>