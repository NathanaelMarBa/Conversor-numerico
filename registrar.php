<?php

include('conexion.php');
include('funciones.php');

function switches($select1, $select2, $numeroi, $fecha){
    switch ($select1 && $select2){
        case "decimal" && "binario":
            $numeroc = decimalbinario($numeroi);
            consulta ($select1, $numeroi, $select2, $numeroc, $fecha);
        break;

        case "decimal" && "hexadecimal":
            $numeroc = decimalhexadecimal($numeroi);
            consulta ($select1, $numeroi, $select2, $numeroc, $fecha);
        break;

        case "decimal" && "octal":
            $numeroc = decimaloctal($numeroi);
            consulta ($select1, $numeroi, $select2, $numeroc, $fecha);
        break;

        case "binario" && "decimal":
            $numeroc = binariodecimal($numeroi);
            consulta ($select1, $numeroi, $select2, $numeroc, $fecha);
        break;
        
        case "binario" && "hexadecimal":
            $numeroc = binariohexadecimal($numeroi);
            consulta ($select1, $numeroi, $select2, $numeroc, $fecha);
        break;

        case "binario" && "octal":
            $numeroc = binariooctal($numeroi);
            consulta ($select1, $numeroi, $select2, $numeroc, $fecha);
        break;

        case "octal" && "decimal":
            $numeroc = octaldecimal($numeroi);
            consulta ($select1, $numeroi, $select2, $numeroc, $fecha);
        break;

        case "octal" && "binario":
            $numeroc = octalbinario($numeroi);
            consulta ($select1, $numeroi, $select2, $numeroc, $fecha);
        break;

        case "octal" && "hexadecimal":
            $numeroc = octalhexadecimal($numeroi);
            consulta ($select1, $numeroi, $select2, $numeroc, $fecha);
        break;

        case "hexadecimal" && "decimal":
            $numeroc = hexadecimaldecimal($numeroi);
            consulta ($select1, $numeroi, $select2, $numeroc, $fecha);
        break;

        case "hexadecimal" && "binario":
            $numeroc = hexadecimalbinario($numeroi);
            consulta ($select1, $numeroi, $select2, $numeroc, $fecha);
        break;

        case "hexadecimal" && "octal":
            $numeroc = hexadecimaloctal($numeroi);
            consulta ($select1, $numeroi, $select2, $numeroc, $fecha);   
        break;

        default:
            echo "Opcion no valida";
            break;
    }
}

if(isset($_POST['convertir'])){
    if(isset($_POST['convertir'])){
        if(strlen($_POST ['numeroi']) >= 1){
            $select1 = $_POST['select1'];
            $select2 = $_POST['select2'];
            $fecha = date("d/m/y");
            $numeroi = trim($_POST['numeroi']);
            date_default_timezone_set("America/Mexico_City");

            switches($select1, $select2, $numeroi, $fecha);
        }
    }
}

?>