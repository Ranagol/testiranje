<?php

function __autoload($className){
    $className = str_replace('..', '', $className);
    require_once("classes/$className.php");
}



$departureWaitingRoom = [];

for ($i=0; $i < 2; $i++) { 
    $departureWaitingRoom[] = new Pilot;//kreiramo automatski pilote da budu u cekaonici
}


for ($i=0; $i < 10; $i++) { 
    $departureWaitingRoom[] = new Putnik;//kreiramo automatski putnike da budu u cekaonici
}

//TESTIRANJE AVIONSKOG LETA
$avionskiLet = new AvionskiLet;
$avionskiLet->kreirajNazivLeta();
echo $avionskiLet->pokaziNazivLeta();





$airplane = [];
$arrival = [];
















require 'index.view.php';
?>