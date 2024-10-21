<?php
//función isset
//Comprueba si una varibale está configurada, es decir, está declarada y no es NULL. En este caso devuelve 1
//En caso contrario devuelve 0.
$var1= 4;
if(isset($var1)){
    print("La variable var1 está inicializada y no es null. Su valor es: ".$var1);
}else{
    print("La variable var1 no está inicializada");
}
