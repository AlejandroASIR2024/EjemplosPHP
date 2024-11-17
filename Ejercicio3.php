<?php
$cadena = [5, 5, 5];
if ($cadena[0] == $cadena[1] & $cadena[0] == $cadena[2]){
	echo $cadena[0] .$cadena[1]. $cadena[2] ." los tres números son iguales";
	}
	elseif ($cadena[0] == $cadena[1]){
		echo $cadena[0] .$cadena[1]. $cadena[2] ." Solo hay un número diferente";
	}
	elseif ($cadena[1] == $cadena[2]){
		echo $cadena[0] .$cadena[1]. $cadena[2]." El primer número es diferente";
	}
	elseif ($cadena[0] == $cadena[2]){
		echo $cadena[0] .$cadena[1]. $cadena[2] ." El número del medio es diferente";
	};