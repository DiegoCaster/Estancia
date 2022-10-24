<?php
    class Modelo_Medico{
        private $conexion;
        function __construct(){
            require_once 'modelo_conexion.php';
            $this->conexion = new conexion();
            $this->conexion -> conectar();
        }

        function listar_medico(){
            $sql = "call SP_LISTAR_MEDICO()";
            $arreglo = array();
            if ($consulta = $this->conexion->conexion->query($sql)){
                while($consulta_VU = mysqli_fetch_assoc($consulta)){
                    $arreglo["data"][]=$consulta_VU;
                }
                return $arreglo;
                $this->conexion->cerrar();
            }
        }

        function listar_especialidad_combo(){
            $sql = "call SP_LISTAR_COMBO_ESPECIALIDAD()";
            $arreglo = array();
            if ($consulta = $this->conexion->conexion->query($sql)){
                while($consulta_VU = mysqli_fetch_array($consulta)){
                    $arreglo[]=$consulta_VU;
                }
                return $arreglo;
                $this->conexion->cerrar();
            }
        }

        function Registrar_Medico($nombre,$direccion,$movil,$sexo,$fenac,$nrodocumento,$colegiatura,$especialidad,$usu,$contra,$rol,$email){
            $sql = "call SP_REGISTRAR_MEDICO('$nombre','$direccion','$movil','$sexo','$fenac','$nrodocumento','$colegiatura',
            '$especialidad','$usu','$contra','$rol','$email')";
            if ($consulta = $this->conexion->conexion->query($sql)){
                if($row = mysqli_fetch_array($consulta)){
                    return $id = trim($row[0]);//retorna valores
                }
                $this->conexion->cerrar();
            }
        }

        /*function Modificar_Medico($idmedico,$nombre,$direccion,$movil,$sexo,$fenac,
        $nrodocumentoactual,$nrodocumentonuevo,$colegiaturaactual,$colegiaturanuevo,$especialidad,
        $idusuario,$email){
            $sql = "call SP_MODIFICAR_MEDICO('$idmedico','$nombre','$apepat','$apemat','$direccion','$movil',
            '$sexo','$fenac','$nrodocumentoactual','$nrodocumentonuevo','$colegiaturaactual','$colegiaturanuevo','$especialidad','$usu','$contra',
            '$rol','$email',)";
            if ($consulta = $this->conexion->conexion->query($sql)){
                if($row = mysqli_fetch_array($consulta)){
                    return $id = trim($row[0]);//retorna valores
                }
                $this->conexion->cerrar();
            }
        }

        function Modificar_Insumo($id,$insumoactual,$insumonuevo,$stock,$estatus){
            $sql = "call SP_MODIFICAR_INSUMO('$id','$insumoactual','$insumonuevo','$stock','$estatus')";
            if ($consulta = $this->conexion->conexion->query($sql)){
                if($row = mysqli_fetch_array($consulta)){
                    return $id = trim($row[0]);
                }
                $this->conexion->cerrar();
            }
        }*/

    }      
?>