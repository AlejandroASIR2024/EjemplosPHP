<?php
    //int(var): Convertir una variable a entero
    // el operador *=* es asignar
    // el operador *==* es igual
    $var1 = 5.9;
    $var2 = (int)$var1;
    echo $var1."<br>"; //El punto es para concatenar
    echo '$var1 <br>'; //Las comillas simples no detectan el valor de una variable
    echo $var2;