<!-- Poner bordes a las tablas anteriores -->
<!-- Optimizar el php_027, poniendo los estilos en una etiqueta style aparte -->
<?php
echo"<style>
    .table_container {
    border: 2px solid green; 
    border-collapse:collapse; 
    margin: 10px auto;
    };
    .cell {
    border: 1px solid green;
    padding: 5px
    }
    </style>";
for ($i=1; $i <= 10 ; $i++) { 
    echo "<table class='table-container'> <tr><th colspan = '5'>tabla del $i</th></tr>";
    for ($j=1; $j <= 10 ; $j++) { 
        $res= $i * $j;
        echo "<tr>";
        echo "<td class='cell'>$i</td>";
        echo "<td class='cell'>x</td>";
        echo "<td class='cell'>$j</td>";
        echo "<td class='cell'>=</td>";
        echo "<td class='cell'>$res</td>";
        echo "</tr>";
    }
    echo "</table></br>";
}