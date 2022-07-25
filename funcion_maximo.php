<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function maximo($aVector){
    $maximo = 0;
    foreach($aVector as $valor){
        if($maximo < $valor){
            $maximo = $valor;
        }
    }
    return $maximo;
}

//Uso
$aSueldo = array(800.30, 400.87, 500.45, 300, 900.70, 100, 900, 1800);
echo "El sueldo máximo es: " . maximo($aSueldo);