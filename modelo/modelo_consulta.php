<?php
    class Modelo_Consulta{
        private $conexion;
        function __construct(){
            require_once 'modelo_conexion.php';
            $this->conexion = new conexion();
            $this->conexion->conectar();
        }

        function listar_consulta($fechainicio,$fechafin){
            $sql = "call SP_LISTAR_CONSULTA('$fechainicio','$fechafin')";
            $arreglo = array();
            if ($consulta = $this->conexion->conexion->query($sql)){
                while($consulta_VU = mysqli_fetch_assoc($consulta)){
                    $arreglo["data"][]=$consulta_VU;
                }
                return $arreglo;
                $this->conexion->cerrar();
            }
        }
    }
?>