<?php
$personas = [
    ["Nombre" => "Alejandro", "Edad" => 29, "Ciudad" => "Talavera"],
    ["Nombre" => "Ana", "Edad" => 26, "Ciudad" => "Madrid"],
    ["Nombre" => "Carlos", "Edad" => 21, "Ciudad" => "Navalcan"],
    ["Nombre" => "Pepe", "Edad" => 40, "Ciudad" => "Cervera"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table con Array Multidimensional</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Ciudad</th>
        </tr>
    <?php
    foreach ($personas as $persona) {
        echo "<tr>";
        echo "<td>". $persona["Nombre"]. "</td>";
        echo "<td>". $persona["Edad"]."</td>";
        echo "<td>". $persona["Ciudad"]."</td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>