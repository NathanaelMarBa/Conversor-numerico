<?php
   function decimalbinario($numero){
       $numeroc = decbin($numero);
       echo ($numero);
   }

   function decimalhexadecimal($numero){
        $numerdechex($numero);
        echo ($numero);
   }

   function decimaloctal($numero){
       $numeroc = decoct($numero);
       echo ($numero);
   }

   function binariodecimal($numero){
       $numeroc = bindec($numero);
       echo ($numero);
   }

   function binariohexadecimal($numero){
       $numeroc = bin2hex($numero);
       echo ($numero);
   }

   function binariooctal($numero){
       $numeroc = ($numero);
       echo ($numero);
   }

   function octaldecimal($numero){
       $numeroc = octdec($numero);
       echo ($numero);
   }

   function octalbinario($numero){
       $numeroc = ($numero);
       echo ($numero);
   }

   function octalhexadecimal($numero){
       $numeroc = ($numero);
       echo ($numero);
   }

   function hexadecimaldecimal($numero){
       $numeroc = hexdec($numero);
       echo ($numero);
   }

   function hexadecimalbinario($numero){
       $numeroc = hex2bin($numero);
       echo ($numero);
   }

   function hexadecimaloctal($numero){
       $numeroc = ($numero);
       echo ($numero);
   }

   function consulta ($select1, $numeroi, $select2, $numeroc, $fecha, $conexion){
        $consulta = "INSERT INTO registros(sistemai, numeroi, sistemas, numeros, fecha) VALUES ('$select1', '$numeroi', '$select2', '$numeroc', '$fecha')";
        $res = mysql_query($conexion, $consulta);
   }
?>