<?php
//CADENAS. Su posición inicial es 0
//FUNCIONES:
//strlen(): Devuelve la posición de una cadena
//strtolower(): Convierte la cadena a minúscula
//strtoupper(): COnvierte toda la cadena a mayúsculas.
//strcmp(): Compara 2 cadenas (sensible a mayúsculas y minúsculas). Devuelve 0 si son iguales
//strcasecmp(): Compara dos cadenas (insensible a mayúsculas y minúsculas). Devuelve 0 si son iguales
//sbstr(): Extraer una parte de la cadena
//str_repeat(): Repite una cadena el número de veces que se especifican
//trim(): Eliminar los espacios en blanco al principio y al final de una cadena.
//str_word_count():
//strrev(): Invierte la cadena 
//strpos(): Busca un texto detro de una cadena y devuelve su posición
//str_replace(): Reemplaza unos caracteres por otros.

//Asignar "Hola Mundo" a una variable
$texto= "Hola Mundo";

//COntar el número de palabras
echo "Número de palabras de $texto: ".str_word_count($texto). "<br>";

//Invertir la cadena
echo "Invertir la cadena $texto: ".strrev($texto). "<br>";

//Buscar el texto "mundo" dentro de la cadena
echo "La posición de 'Mundo': ".strpos($texto,"Mundo"). "<br>";

//Reemplazar la cadena 'Mundo' por 'Dolly'
echo "Reemplazo de 'Mundo' por 'Dolly': ".str_replace("Mundo" , "Dolly", $texto)."<br>";

//Longitud de una cadena
echo "Longitud de la cadena $texto: ".strlen($texto). "<br>";

//Pasar a minúsculas
echo "Cadena en minúsculas: ".strtolower($texto). "<br>";

//Pasar a mayúsculas
echo "Cadena en mayúsculas: ".strtoupper($texto). "<br><br>";

//Comparar cadenas sensible mayúsculas y minúsculas
echo "Comparación de 'Hola' y 'hola': ".strcasecmp("Hola", "hola")."<br>";

//Extraer 5 caracteres a partir del caracter 5
echo "Subcadena de 3 caracteres $texto: a partir del quinto".substr($texto,5,3)."<br>";
echo "Subcadena a partir de $texto a partir del quinto caracter: ".substr($texto,5,3)."<br>";

//repetir una cadena 
echo "repetir 'Hola' tres veces: ".str_repeat("Hola ", 3)."<br>";

//eliminar espacios en blanco
echo "Eliminar espacios de la cadena $texto: " . trim($texto)."<br>";