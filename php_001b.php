<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_001</title>
</head>
<body>
    <table style="border: 1px solid black;">
        <tr>
            <td>Tipo</td>
            <td>Ventajas</td>
            <td>Inconvenientes</td>
        </tr>
        <tr>
            <td>A</td>
            <td>Más barato</td>
            <td>Más caro</td>
        </tr>
        <tr>
            <td>B</td>
            <td>Más barato</td>
            <td>Más lento</td>
        </tr>
    </table>
    <h1>40</h1>
    <h2>Aquí termina el html</h2>
</body>
</html>

<?php 
    $edad= 40;
    print($edad);
    echo "</br>"; //Imprimo una linea en blanco
    echo '<h1>';
    echo $edad;
    echo '</h1>';
    $nombre= "Alejandro"; //Asignamos "Alejandro" a la variable nombre
    print($nombre);
?>