<?php
require_once 'conexion.php';

    function decimalbinario($numero){
        $numeroc = decbin($numero);
        echo ($numeroc);
        return $numeroc;
        $numeroc = 0;
    }

    function decimalhexadecimal($numero){
        $numeroc = $numerdechex($numero);
        echo ($numeroc);
        return $numeroc;
        $numeroc = 0;
    }

    function decimaloctal($numero){
        $numeroc = decoct($numero);
        echo ($numeroc);
        return $numeroc;
        $numeroc = 0;
    }

    function binariodecimal($numero){
        $numeroc = bindec($numero);
        echo ($numeroc);
        return $numeroc;
        $numeroc = 0;
    }

    function binariohexadecimal($numero){
        $numeroc = bin2hex($numero);
        echo ($numeroc);
        return $numeroc;
        $numeroc = 0;
    }

    function binariooctal($numero){
        $numeroc = ($numero);
        echo ($numeroc);
        return $numeroc;
        $numeroc = 0;
    }

    function octaldecimal($numero){
        $numeroc = octdec($numero);
        echo ($numeroc);
        return $numeroc;
        $numeroc = 0;
    }

    function octalbinario($numero){
        $numeroc = ($numero);
        echo ($numeroc);
        return $numeroc;
        $numeroc = 0;
    }

    function octalhexadecimal($numero){
        $numeroc = ($numero);
        echo ($numeroc);
        return $numeroc;
        $numeroc = 0;
    }

    function hexadecimaldecimal($numero){
        $numeroc = hexdec($numero);
        echo ($numeroc);
        return $numeroc;
        $numeroc = 0;
    }

    function hexadecimalbinario($numero){
        $numeroc = hex2bin($numero);
        echo ($numeroc);
        return $numeroc;
        $numeroc = 0;
    }

    function hexadecimaloctal($numero){
        $numeroc = ($numero);
        echo ($numeroc);
        return $numeroc;
        $numeroc = 0;
    }

    function consulta ($select1, $numeroi, $select2, $numeroc, $fecha){
            $mysqli = ConexionBD::Conectar();
            return $mysqli->query("INSERT INTO conversiones VALUES ('$select1', '$numeroi', '$select2', '$numeroc', '$fecha');");   
    }
?>