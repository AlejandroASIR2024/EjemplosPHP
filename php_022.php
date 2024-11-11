<?php
//BUCLE FOR
//Es una estructura de programación que se usa para repetir un determinado código un número determinado de veces.
//FOR: BUCLE que conocemos de antemano el número de veces que quiero repetir la acción
//FOR lleva implícito 3 parámetros: La inicialización, la condición y el incremento o decremento.
//for(inicialización; condición; incremento/decremento){
    //bloque código
    //}
    
//Imprimir del 1 al 100
for ($i=1; $i <= 100; $i++) { 
    echo $i." ";
}
for ($i=1; $i <= 100; $i++) { 
    $msg = ($i == 100) ? "$i. " : "$i, ";
    echo $msg;
}