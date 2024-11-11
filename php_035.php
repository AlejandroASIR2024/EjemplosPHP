<!-- Agregar elementos a un array en cualquier orden -->
<!-- Al usar [] sin un índice específico, PHP asigna el siguiente índice mayor disponible automaticamente -->
<?php
$semana[1] = "lunes";
$semana[] = "Martes"; //2
$semana[] = "Miércoles"; //3
$semana[10] = "Jueves";
$semana[] = "Viernes"; //11
$semana[5] = "Sábado";
$semana[] = "Domingo"; //12

print_r($semana);