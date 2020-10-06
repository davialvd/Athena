<?php
    require '../../Modelo/model_estudiante.php';

    $MU = new Modelo_Estudiante();
  
    $consulta = $MU->listar_tipo_doc();

        
        echo json_encode($consulta);
        # code...
   
 
    

?>