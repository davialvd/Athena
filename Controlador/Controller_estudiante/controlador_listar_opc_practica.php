<?php
    require '../../Modelo/model_estudiante.php';

    $MU = new Modelo_Estudiante();
  
    $consulta = $MU->listar_opc_practica();

        
        echo json_encode($consulta);
        # code...
   
 
    

?>