<!-- Haz una tabla con las 5 primeras potencias de los 10 primeros números -->
<?php
// Definir los primeros 10 números
$numeros = range(1, 10);

// Recorrer los números del 1 al 10
foreach ($numeros as $numero) {
    // Imprimir las potencias de 1 a 5
    echo "Potencias de $numero:\n";
    for ($i = 1; $i <= 5; $i++) {
        $resultado = pow($numero, $i);  // Calcula $numero elevado a la potencia $i
        echo "$numero^$i = $resultado\n";
    }
    echo "\n"; // Salto de línea para separar los resultados de cada número
}
