<?php

function __autoload($className){
    $className = str_replace('..', '', $className);
    require_once("classes/$className.php");
}


$departureWaitingRoom = [];

for ($i=0; $i < 10; $i++) { 
    $departureWaitingRoom[] = new Putnik;//kreiramo automatski putnike da budu u cekaonici
}



$airplane = [];
$arrival = [];
















require 'index.view.php';
?>