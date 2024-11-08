<?php

//BUCLES ANIDADOS: FOR dentro de otro FOR.
//Si quiero insertar HTML dentro de PHP uso echo o print
for ($i=1; $i <= 10 ; $i++) { 
    echo "<h3>Tabla del $i</h3>";
    for ($j=1; $j <= 10 ; $j++) { 
        $res = $i * $j; 
        echo "$i x $j = $res <br>";
    }
}