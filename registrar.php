<?php

include('conexion.php');
include ('funciones');

if(isset($_POST['convertir'])){
    if(strlen($_POST ['numeroi']) >= 1){
        $select1 = trim($_POST['select1']);
        $select2 = trim($_POST['select2']);
        $fecha = date("d/m/y");
        $numeroi = trim($_POST['numeroi']);
        date_default_timezone_set("America/Mexico_City");
        switch ($_POST['select1'] && ['select2']){

            case "decimal" && "binario":
                decimalbinario($numeroi);
                $numeroco = $numeroc;
                consulta ($select1, $numeroi, $select2, $numeroc, $fecha, $conexion);
            break;

            case "decimal" && "hexadecimal":
                decimalhexadecimal($numeroi);
                $numeroco = $numeroc;
                consulta ($select1, $numeroi, $select2, $numeroc, $fecha, $conexion);
            break;

            case "decimal" && "octal":
                decimaloctal($numeroi);
                $numeroco = $numeroc;
                consulta ($select1, $numeroi, $select2, $numeroc, $fecha, $conexion);
            break;

            case "binario" && "decimal":
                binariodecimal($numeroi);
                $numeroco = $numeroc;
                consulta ($select1, $numeroi, $select2, $numeroc, $fecha, $conexion);
            break;
            
            case "binario" && "hexadecimal":
                binariohexadecimal($numeroi);
                $numeroco = $numeroc;
                consulta ($select1, $numeroi, $select2, $numeroc, $fecha, $conexion);
            break;

            case "binario" && "octal":
                binariooctal($numeroi);
                $numeroco = $numeroc;
                consulta ($select1, $numeroi, $select2, $numeroc, $fecha, $conexion);
            break;

            case "octal" && "decimal":
                octaldecimal($numeroi);
                $numeroco = $numeroc;
                consulta ($select1, $numeroi, $select2, $numeroc, $fecha, $conexion);
            break;

            case "octal" && "binario":
                octalbinario($numeroi);
                $numeroco = $numeroc;
                consulta ($select1, $numeroi, $select2, $numeroc, $fecha, $conexion);
            break;

            case "octal" && "hexadecimal":
                octalhexadecimal($numeroi);
                $numeroco = $numeroc;
                consulta ($select1, $numeroi, $select2, $numeroc, $fecha, $conexion);
            break;

            case "hexadecimal" && "decimal":
                hexadecimaldecimal($numeroi);
                $numeroco = $numeroc;
                consulta ($select1, $numeroi, $select2, $numeroc, $fecha, $conexion);
            break;

            case "hexadecimal" && "binario":
                hexadecimalbinario($numeroi);
                $numeroco = $numeroc;
                consulta ($select1, $numeroi, $select2, $numeroc, $fecha, $conexion);
            break;

            case "hexadecimal" && "octal":
                hexadecimaloctal($numeroi);
                $numeroco = $numeroc;
                consulta ($select1, $numeroi, $select2, $numeroc, $fecha, $conexion);   
            break;

            default:
                echo "Opcion no valida"
            break;
        }
    }
}

?>