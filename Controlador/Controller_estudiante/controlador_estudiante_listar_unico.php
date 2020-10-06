<?php
    require '../../Modelo/model_estudiante.php';

    $MU = new Modelo_Estudiante();
  
    $consulta = $MU->listar_estudiante();

    if ($consulta) {
        
        echo json_encode($consulta);
        
        # code...
   
    }
    else{


        echo '{
            "sEcho": 1,
            "iTotalRecords": "0",
            "iTotalDisplayRecords": "0",
            "aaData": []
        }';

    }

    

?>