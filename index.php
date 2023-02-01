<!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Conversor numerico</h1>
    <form method="post">
        <select name="select1">
            <option value="decimal">Decimal</option>
            <option value="binario">Binario</option>
            <option value="hexadecimal">Hexadecimal</option>
            <option value="octal">Octal</option>
        </select>
        <input type="text" name="numeroi" placeholder="Ingresa el numero a convertir">
        <label for="">A que sistema deseas convertir?</label>
        <select name="select2">
            <option value="decimal">Decimal</option>
            <option value="binario">Binario</option>
            <option value="hexadecimal">Hexadecimal</option>
            <option value="octal">Octal</option>
        </select>
        <input type="submit" name="convertir">

    </form>

<?php
include('registrar.php');
?>

</body>
</html>