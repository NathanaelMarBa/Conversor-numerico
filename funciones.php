<?php
   function decimalbinario($numero){
       $numeroc = echo decbin($numero);
   }

   function decimalhexadecimal($numero){
        $numeroc = echo dechex($numero);
   }

   function decimaloctal($numero){
       $numeroc = echo decoct($numero);
   }

   function binariodecimal($numero){
       $numeroc = echo bindec($numero);
   }

   function binariohexadecimal($numero){
       $numeroc = echo bin2hex($numero);
   }

   function binariooctal($numero){
       $numeroc = echo($numero);
   }

   function octaldecimal($numero){
       $numeroc = echo octdec($numero);
   }

   function octalbinario($numero){
       $numeroc = echo ($numero);
   }

   function octalhexadecimal($numero){
       $numeroc = echo ($numero);
   }

   function hexadecimaldecimal($numero){
       $numeroc = echo hexdec($numero);
   }

   function hexadecimalbinario($numero){
       $numeroc = echo hex2bin($numero);
   }

   function hexadecimaloctal($numero){
       $numeroc = echo ($numero);
   }

   function consulta ($select1, $numeroi, $select2, $numeroc, $fecha, $conexion){
        $consulta = "INSERT INTO registros(sistemai, numeroi, sistemas, numeros, fecha) VALUES ('$select1', '$numeroi', '$select2', '$numeroc', '$fecha')";
        $res = mysql_query($conexion, $consulta)
   }
?>