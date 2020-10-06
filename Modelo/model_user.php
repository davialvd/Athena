<?php
    class Modelo_Usuario{
        private $conexion;
        function __construct(){
            require_once 'conexion.php';
            $this->conexion = new conexion();
            $this->conexion->conectar();
        }

        function VerificarUsuario($usuario,$contra){
            $sql = "call SP_VERIFICAR_USER('$usuario')";
			$arreglo = array();
			if ($consulta = $this->conexion->conexion->query($sql)) {
				while ($consulta_VU = mysqli_fetch_array($consulta)) {
					if(password_verify($contra, $consulta_VU["CONTRA_USER"]))
                    {
                        $arreglo[] = $consulta_VU;
                  
                    }
				}
				return $arreglo;
				$this->conexion->cerrar();
			}
        }

        function listar_usuario(){
            $sql = "call SP_LISTAR_USUARIO()";
            $arreglo = array();
            if ($consulta = $this->conexion->conexion->query($sql)) {
                while ($consulta_VU = mysqli_fetch_assoc($consulta)) {

                    $arreglo["data"][]=$consulta_VU;
       
                }
                return $arreglo;
                $this->conexion->cerrar();
            }
        }
    function listar_combo_rol(){
            $sql = "call SP_LISTAR_ROLES()";
            $arreglo = array();
            if ($consulta = $this->conexion->conexion->query($sql)) {
                while ($consulta_VU = mysqli_fetch_array($consulta)) {
                    
                        $arreglo[] = $consulta_VU;
                    
                }
                return $arreglo;
                $this->conexion->cerrar();
            }
        }


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

           
        }

    }

?>