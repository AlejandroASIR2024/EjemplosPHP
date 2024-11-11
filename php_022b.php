<?php
//Transformamos el siguiente for en un bucle while
//WHILE tiene la condición antes de entrar en el bucle, por lo tanto cuidado! Puede que nunca se llegue a entrar.
//WHILE es un bucle que se ejecuta mientras se cumpla una condición. No lleva inicialización por lo tanto hay que hacerlo fuera del bucle.
//WHILE no lleva incremento o decremento, hay que hacerlo dentro del bucle
//for ($i=1; $i <=100 ; $i++) { 
//    echo $i." ";
//}
$i = 1;
while ($i <= 100) {
  echo $i. " "  ;
  $i++;
}

//DO......WHILE: La condición se ejecuta al final. OJO AL MENOS SE EJECUTA UNA VEZ EL BUCLE.
echo "Con bucle DO <br>";
$j= 0;
do {
  echo $j. " ";
  $j++;
} while ($j <= 100);