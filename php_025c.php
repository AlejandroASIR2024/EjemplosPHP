<?php
//Ejercicio con BUCLE CENTINELA. Hay una variable que me dice si nos salimos del bucle al cumplirse una condición
//Hacer un programa que escriba números aleatorios entre 1 y 500 y se pare cuando el número sea múltiplo de 7

$salir=false;
while (!$salir) {
    $num = rand(1,500);
    echo "$num <br>";
    $salir = ($num%7 == 0); //El centinela vale verdadero si es múltiplo de 7.
}
