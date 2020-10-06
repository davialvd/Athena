
<?php
    require '../../Modelo/model_user.php';

    $MU = new Modelo_Usuario();
    $usuario = htmlspecialchars($_POST['usu'],ENT_QUOTES,'UTF-8');
  	$estado_user = htmlspecialchars($_POST['estado_user'],ENT_QUOTES,'UTF-8');
    $consulta = $MU->estado_user($usuario,$estado_user);
   	echo $consulta;

?>