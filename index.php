<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Calculadora</title>
    <link rel='stylesheet' href='./Style.css'>
</head>
<body>
    <section class='grid-Container'>
        <div class='tittle_Name'>
            <h1>Conversor</h1>
            <h1>Numérico</h1>
        </div>
        <div class='form-Container'>
            <div class='form-Section'>
                <form method='post'>
                    <select name='select1'>
                        <option value='decimal'>Decimal</option>
                        <option value='binario'>Binario</option>
                        <option value='hexadecimal'>Hexadecimal</option>
                        <option value='octal'>Octal</option>
                    </select>
                    <input type='text' name='numeroi' placeholder='Ingresa el numero a convertir'>
                    <label for=''>¿A que sistema deseas convertir?</label>
                    <select name='select2'>
                        <option value='decimal'>Decimal</option>
                        <option value='binario'>Binario</option>
                        <option value='hexadecimal'>Hexadecimal</option>
                        <option value='octal'>Octal</option>
                    </select>
                    <input type='submit' name='convertir'>
                </form>
            </div>
            <div class='reply-Section'>
                <h1>Resultado</h1>
                <?php
                    include('registrar.php');
                ?>
            </div>
        </div>
    </section>
</body>
</html>