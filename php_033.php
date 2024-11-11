<?php
$ciudades = ["Talavera de la Reina", "Toledo", "Ciudad Real", "Albacete", "Guadalajara"];

//Imprimir el array con un for
echo "<br><strong>IMpresión del array con bucle for: </strong><br>";
for ($i=0; $i < count($ciudades); $i++){
    if ($i == 0){
        echo "Posición ". $i. ": " .$ciudades[$i]. "<br>";
    }else {
        echo "Posición $i ª : " .$ciudades[$i]. "<br>";
        
    };
};

//Imprimir el array con print_r
print_r($ciudades);

//mostrar información del array con var_dump
var_dump($i); //información de la variable contador del bucle for.
echo "<br>";
var_dump($ciudades);

//Imprimir el array con un bucle foreach
//Recorrer el vector $ciudades con una variable llama $nombre que incrementará su posición en cada iteración.
foreach ($ciudades as $nombre) {
    echo $nombre. "<br>";
}