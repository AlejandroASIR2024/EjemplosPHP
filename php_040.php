<!-- ARRAYS ASOCIATIVOS: El índice (key) de cada elemento es una clave personalizada que no tiene que ser numérica -->
 <?php
 //ARRAY INDEXADO. Sus claves son 1 2 3 4 5 6
 $semana = ["lunes", "martes", "miércoles", "jueves", "viernes"];

 foreach ($semana as $key => $value) {
    echo "$key => $value <br>";
 }

 //ARRSY ASOCIATIVO. SUS CLAVES SERÁN JUAN, ANA, LUIS Y MARTA
 $edades = ["Juan" => 25, "Ana" => 30, "Luis" => 22, "Marta" => 28];
 echo "Edades de las personas: <br>";
 foreach ($edades as $nombre => $edad) {
    echo "$nombre tiene $edad años <br>";
 }