<?php
// Empezamos con la etiqueta HTML para la tabla
echo "<table border='1' style='border-collapse: collapse; text-align: center; width: 100%;'>";

// Creamos las filas y columnas con los números del 1 al 100
for ($i = 1; $i <= 10; $i++) {
    // Abrimos una fila de la tabla
    echo "<tr>";
    
    // Imprimimos 10 números por fila (del 1 al 100)
    for ($j = 1; $j <= 10; $j++) {
        // Calculamos el número que corresponde en la tabla
        $numero = (($i - 1) * 10) + $j;
        
        // Mostramos el número en una celda de la tabla
        echo "<td>$numero</td>";
    }
    
    // Cerramos la fila
    echo "</tr>";
}

// Cerramos la tabla
echo "</table>";
?>
