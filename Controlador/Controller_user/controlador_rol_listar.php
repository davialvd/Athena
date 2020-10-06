<?php
    require '../../Modelo/model_user.php';

    $MU = new Modelo_Usuario();
  
    $consulta = $MU->listar_combo_rol();

        
        echo json_encode($consulta);
        # code...
   
  

    

?>