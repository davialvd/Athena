
<?php
    require '../../Modelo/model_user.php';

    $MU = new Modelo_Usuario();
    $usuario = htmlspecialchars($_POST['usu'],ENT_QUOTES,'UTF-8');
    $contra = password_hash($_POST['passw'], PASSWORD_DEFAULT,['cost'=>10]);
    $sexo = htmlspecialchars($_POST['cbm_sexo'],ENT_QUOTES,'UTF-8');
    $rol = htmlspecialchars($_POST['cbm_rol'],ENT_QUOTES,'UTF-8');
    $consulta = $MU->InsertarUsuario($usuario,$contra,$sexo,$rol);
   	echo $consulta;

?>