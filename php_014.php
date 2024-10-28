<?php
//EXPRESIONES ARITMÉTICAS
//No es necesario inicializar variables en php, sin embargo es muy buena práctica. Las variables no inicializadas tienen un valor predeterminado de acuerdo a su tipo dependiendo del contexto en el que son usadas. Las booleanas se asumen como false, los enteros y flotantes como cero, las cadenas (p. ej usadas en echo) se establecen como una cadena vacia, y los arrays se establecen como un array vacío.

$a = 0;
$b = 3;
$resultado = 0;

//Suma
$resultado = $a + $b;
echo "$a + $b es $resultado <br>"; 
echo '$a + $b es resultado';

//Resta
$resultado = $b - $a;
echo "$a - $b es $resultado <br>";

//División
$resultado = $a / $b; 
echo "$a / $b es $resultado <br>";

//División entera
$resultado = (int)($a / $b);
echo "(int)($a / $b) es $resultado <br>";

//operador módulo (%). Es el resto de la división
$resultado = $a % $b;
echo "El resto de dividir $a entre $b es $resultado"."<br>";

//Incrementos - Decrementos

//Incrementos. Post-Incremento: devuelve el valor y luego lo incrementa
$resultado = $a++; //$resultado = $a + 1; $a= $a + 1
echo "El valor de a con post-incremento es: ";

//Pre-incremento
$resultado = ++$a; //1º $a = $a + 1; 2º $resultado = $a
echo "el valor de a con pre-incremento es: $a. El valor de resultado es $resultado <br>";

//Post-decremento
$a = 20;
$resultado = $a--; //Resultado es igual a 20; $a=19
echo "El valor de a con post-decremento es: $a. El valr de resultado es: $resultado <br>";

//Pre-decremento
$a = 20;
$resultado = --$a;
echo "El valor de a con pre-decremento es: $a. El valor de resultado es: $resultado <br>";

//Asignación con operadores
$a = 20;
$a += 10; //$a = $a + 10

$a = 20;
$a -= 10;
echo "el valor de 20 -= 10 es: $a <br>";

$a = 20;
$a *= 10;
echo "el valor de 20 *= 10 es: $a <br>";

$a = 20;
$a /= 10;
echo "el valor de 20 /= 10 es: $a <br>";

//Prioridad de operadores
$resultado = 2 + 3 * 5;
echo "El valor de 2 + 3 * 5 es: $resultado <br>";

$resultado = (2 + 3) * 5;
echo "El valor de (2 + 3) * 5 es: $resultado <br>";