<?php
    class ConexionBD
    {
        public static function Conectar()
        {
            $Usuario = 'root';
            $Contrasenia = '';
            $Servidor = 'localhost';
            $NombreBD = 'calculadora';
            $conexion = new mysqli($Servidor, $Usuario, $Contrasenia, $NombreBD);
            return $conexion;
        }
    }
?>