
<?php
    require '../../Modelo/model_estudiante.php';

    $MU = new Modelo_Estudiante();
    $consulta= $MU->insertar_estudiante($_POST["codigo_estudiante"],$_POST["nombres_estudiante"],$_POST["apellido_paterno"],$_POST["apellido_materno"],$_POST["tipo_doc_est"],$_POST["numero_documento"],$_POST["fecha_nac"],$_POST["pais_nac"],$_POST["ciudad_nac"],$_POST["programa"],$_POST["semestre"],$_POST["eps"],$_POST["correo_universidad"],$_POST["correo_personal"],$_POST["ciudad_res"],$_POST["direccion_residencia"],$_POST["telefono_fijo"],$_POST["teledono_celular"],$_POST["opcpractica_uno"],$_POST["opcpractica"],$_POST["hojadevida"],$_POST["doc_identidad"],$_POST["doc_eps"],$_POST["arl"]);
    echo $consulta;

?>