<!-- Igual que el anterior pero comprobando que existe la ciudad en dicha posición -->
<?php
 $ciudades= ["Talavera", "Toledo", "Valencia", "Ciudad Real"];
if (isset($ciudades[1])){
    echo $ciudades[1];
}else {
    echo "La ciudad no está en el índice especificado";
};