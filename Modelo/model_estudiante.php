<?php
    class Modelo_Estudiante{ // Clase principal estudiante
        private $conexion;
        function __construct(){
            require_once 'conexion.php';
            $this->conexion = new conexion();// Hace referencua al objeto conexion del archivo conexion.php
            $this->conexion->conectar();
        }

        

        function listar_estudiante(){
            $sql = "call SP_LISTAR_ESTUDIANTES()";// Muestra la tabla de datos inscripcion
            $arreglo = array();
            if ($consulta = $this->conexion->conexion->query($sql)) {
                while ($consulta_VU = mysqli_fetch_assoc($consulta)) {// mysqli_fetch_assoc arreglo asociativo

                    $arreglo["data"][]=$consulta_VU;
                    
                }
                return $arreglo;
                $this->conexion->cerrar();
            }
        }
   function listar_tipo_doc(){
            $sql = "call SP_LISTAR_TIPO_DOC()";
            $arreglo = array();
            if ($consulta = $this->conexion->conexion->query($sql)) {
                while ($consulta_VU = mysqli_fetch_array($consulta)) {// mysqli_fetch_assoc arreglo como matriz
                    
                        $arreglo[] = $consulta_VU;
                    
                }
                return $arreglo;
                $this->conexion->cerrar();
            }
        }

    function listar_pais_nacimiento(){
            $sql = "call SP_LISTAR_PAIS()";
            $arreglo = array();
            if ($consulta = $this->conexion->conexion->query($sql)) {
                while ($consulta_VU = mysqli_fetch_array($consulta)) {
                    
                        $arreglo[] = $consulta_VU;
                    
                }
                return $arreglo;
                $this->conexion->cerrar();
            }
        }

    function listar_ciudad_nacimiento(){
            $sql = "call SP_LISTAR_CIUDAD_NAC()";
            $arreglo = array();
            if ($consulta = $this->conexion->conexion->query($sql)) {
                while ($consulta_VU = mysqli_fetch_array($consulta)) {// mysqli_fetch_assoc arreglo como matriz
                    
                        $arreglo[] = $consulta_VU;
                    
                }
                return $arreglo;
                $this->conexion->cerrar();
            }
        }

    function listar_programa(){
            $sql = "call SP_LISTAR_PROGRAMAS()";
            $arreglo = array();
            if ($consulta = $this->conexion->conexion->query($sql)) {
                while ($consulta_VU = mysqli_fetch_array($consulta)) {
                    
                        $arreglo[] = $consulta_VU;
                    
                }
                return $arreglo;
                $this->conexion->cerrar();
            }
        }

     function listar_opc_practica(){
            $sql = "call SP_LISTAR_OP_PRACTICA()";
            $arreglo = array();
            if ($consulta = $this->conexion->conexion->query($sql)) {
                while ($consulta_VU = mysqli_fetch_array($consulta)) {
                    
                        $arreglo[] = $consulta_VU;
                    
                }
                return $arreglo;
                $this->conexion->cerrar();
            }
        }

        function insertar_estudiante($codigo_estudiante,$nombres_estudiante,$apellido_paterno,$apellido_materno,$tipo_doc_est,$numero_documento,$fecha_nac,$pais_nac,$ciudad_nac,$programa,$semestre,$eps,$correo_universidad,$correo_personal,$ciudad_res,$direccion_residencia,$telefono_fijo,$teledono_celular,$opcpractica_uno,$opcpractica,$hojadevida,$doc_identidad,$doc_eps,$arl){

          
            require_once("model_estudiante.php");
            // Crear instancias de la clase estudiantes para ejecutar la estrategia segun la necesidad
            $partx = new Modelo_Estudiante();
            $partxdoc = new Modelo_Estudiante();
            $partxeps = new Modelo_Estudiante();
            $iden_documentohv=$_POST["codigo_estudiante"];
            $iden_documentocc=$_POST["codigo_estudiante"];
            $iden_documento=$_POST["codigo_estudiante"];

            $hojadevida = '';
            $doc_identidad = '';
            $doc_eps = '';

            $nombrearhv=$_FILES['hojadevida']['name'];
            $nombreardocid=$_FILES['doc_identidad']['name'];
            $nombreareps=$_FILES['doc_eps']['name'];


            //Estrategia principal
            if($_FILES["hojadevida"]["name"] != '' AND $_FILES["doc_identidad"]["name"] != '' AND $_FILES["doc_eps"]["name"] != '')
            {

                $nombrearhv = $partx->upload_file($iden_documentohv);
                $nombreardocid = $partxdoc->upload_filedocid($iden_documentocc);
                $nombreareps = $partxeps->upload_fileeps($iden_documento);


            }
            $rutahv="<a href=../Controlador/Archivos/".$nombrearhv.">VER</a>";
            $rutadocid="<a href=../Controlador/Archivos/".$nombreardocid.">VER</a>";
            $rutaeps="<a href=../Controlador/Archivos/".$nombreareps.">VER</a>";
          
            $sqldoc = "call SP_INSERTAR_DOC('$rutahv','$rutadocid','$rutaeps','$arl')";
            $arreglo = array();
            
             if ($consultadoc = $this->conexion->conexion->query($sqldoc)) {
                    if ($row = mysqli_fetch_array($consultadoc)) {
               
                         return  $id= trim($row[0]);
                    }
                }

            $sql = "call SP_INSERTAR_ESTUDIANTE('$codigo_estudiante','$nombres_estudiante','$apellido_paterno','$apellido_materno','$tipo_doc_est','$numero_documento','$fecha_nac','$pais_nac','$ciudad_nac','$programa','$semestre','$eps','$correo_universidad','$correo_personal','$ciudad_res','$direccion_residencia','$telefono_fijo','$teledono_celular','$opcpractica_uno','$opcpractica','1','1')";
            $arreglo = array();
             if ($consulta = $this->conexion->conexion->query($sql)) {
                    if ($row = mysqli_fetch_array($consulta)) {
               
                         return  $id= trim($row[0]);
                    }
                }


             $this->conexion->cerrar();
            //var_dump($sql->execute());
        }
        // Estrategia Concreta
        function upload_file($nombrehojadevida){
            if(isset($_FILES["hojadevida"]))
            {
              $extension = explode('.', $_FILES['hojadevida']['name']);
              $new_name = $nombrehojadevida.'HV'. '.' . $extension[1];
              $destination = '../Archivos/' . $new_name;
              move_uploaded_file($_FILES['hojadevida']['tmp_name'], $destination);
              return $new_name;

            }
        }
        function upload_filedocid($nombreid){
            if(isset($_FILES["doc_identidad"]))
            {
            $extensiondoc = explode('.', $_FILES['doc_identidad']['name']);
              $new_namedoc = $nombreid.'DI'. '.' . $extensiondoc[1];
              $destinationdoc = '../Archivos/' . $new_namedoc;
              move_uploaded_file($_FILES['doc_identidad']['tmp_name'], $destinationdoc);
              return $new_namedoc;

            }
        }
        function upload_fileeps($nombreeps){
            if(isset($_FILES["doc_eps"]))
            {
              
             
              $extensioneps = explode('.', $_FILES['doc_eps']['name']);
              $new_nameeps = $nombreeps.'EPS'. '.' . $extensioneps[1];
              $destinationeps = '../Archivos/' . $new_nameeps;
              move_uploaded_file($_FILES['doc_eps']['tmp_name'], $destinationeps);
              return $new_nameeps;
            }
        }
 /* 
     function InsertarUsuario($usuario,$contra,$sexo,$rol){
            $sql = "call SP_NUEVO_REGISTRO('$usuario','$contra','$sexo','$rol')";
            $arreglo = array();
             if ($consulta = $this->conexion->conexion->query($sql)) {
                    if ($row = mysqli_fetch_array($consulta)) {
               
                         return  $id= trim($row[0]);
                    }
                }
             $this->conexion->cerrar();
        }

    function estado_user($usuario,$estatus){

            $sql = "call SP_EDITAR_ESTADO_USER('$usuario','$estatus')";
            $arreglo = array();
             if ($consulta = $this->conexion->conexion->query($sql)) {
                    //$id_retornar= mysql_insert_id($this->conexion->conexion);
                    return 1;
                }
            else{
                return 0;

            }

          
        } */

    }

?>