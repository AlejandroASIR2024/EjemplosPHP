<?php
//Variable centinela y variable contador
//Programa que escriba de 1 a 500 y se repite hasta que aparezca un múltiplo de 7. Pero como mucho se repite 8 veces

$salir = false; //variable centinela
$i = 0; //contador

while ($salir == false && $i<8) {
    $num= rand(1,500);
    echo ($num. "<br>");
    $i++;
    $salir=($num % 7 == 0);
}