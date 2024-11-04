<?php
//operadores lgógicos
//TRUE equivale a 1 y FALSE equivale a 0
//AND (&& o and): Devuelve TRUE si ambas expresiones son verdaderas. 
//OR (|| o or): Devuelve TRUE si al menos una de las expresiones es verdadera.
//NOT(!): Invierte el valor lógico de una expresión. 

$a= 5; //true por que es distinta de 0
$b= 0; //false
$c= 10; //true

//AND lógico (&&). Devuelve true si ambos operadores son ciertos
echo "AND lógico (&&): <br>";
echo ($a && $b) ."<br>";
echo ($a && $c). "<br>";

if (&a && $b){
    echo "Es true";
}else{
    echo "Es false";
}

//Con operador ternario
$resultado= ($a && $b) ? "Es true" : "Es false"
echo $resultado
//Con otro operador ternario
($a && $b) ? "echo Es True" : "echo Es false";

//OR (||). Es true si al menos uno de los operadores es true
echo "OR lógico (||): <br>";
echo ($a || $b) . "<br>";
echo ($a || $c) . "<br>";
echo ($b || $c) . "<br>";
echo (int)($b || 0). "<br>";

//NOT (!). Invierte el valor lógico
echo "NOT lógico (!): <br>";
echo $a. "<br>";
echo (int)(!$a). "<br>";