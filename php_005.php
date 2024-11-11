<?php
    //define("CIUDAD", "Madrid"); //La Variable es ciudad y el valor es Madrid
    if (defined("CIUDAD")){
        print ("La ciudad es: ".CIUDAD);
    } else {
        print("La constante ciudad no está definida");
    }