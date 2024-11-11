<!-- ARRAYS -->
<!-- Diferentes formas de declarar un array en PHP -->
<!-- <pre> formatea las alida para verlo igual que está en el código fuente -->
<!-- print_r() muestra información de una variable -->
<!-- var_dump  -->
<?php
echo "<h2>Declaración de arrays en PHP</h2>";

//1. Declaración de arrays utilizando la estructura de paréntesis
echo "<h3>1. Declaración de arrays usando array()</h3>";
$numeros = array(1,2,3,4,5);

echo "<pre>";
print_r($numeros);
var_dump($numeros);
echo "</pre>";

//2. Usando []
echo "<h3>2. Declaración de arrays usando paréntesis</h3>";
$ciudades = ["Talavera", "Toledo", "Guadalajara"];