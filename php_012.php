<?php
//función isset Devuelve 1 si está definida la variable 0 en caso contrario.
//Comprueba si una varibale está definida y no es NULL.
//En caso contrario devuelve 0.
//El valor NULL representa una variable SIN valor
$var1= 4;
if(isset($var1)){
    print("La variable var1 está inicializada y no es null. Su valor es: ".$var1);
}else{
    print("La variable var1 no está inicializada");

}

unset($var1); 
echo "<br>";
$var2= null;
if(isset($var1)){
    print("La variable var2 está inicializada y no es null. Su valor es: ".$var2);
}else{
    print("La variable var2 no está inicializada y su valor es NULL");

}
