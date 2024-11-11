<?php
//if normal

$a=8;
$b=5;
if($a > $b){
    echo "$a es mayor que $b"."<br>";
}else {
    echo "$a es menor que $b". "<br>";
}

//if con operador ternario. La ? es "entonces" y los ":" es "sino"
    $resultado= ($a > $b) ? "$a es mayor que $b" : "$a es menor que $b";
    echo $resultado;