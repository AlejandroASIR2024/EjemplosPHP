<?php
$numero = rand(1,10);
echo "La tabla de multiplicar del $numero <br>";
for ($i=1; $i <= 10; $i++) { 
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado <br>";
};