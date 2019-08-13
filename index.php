<?php

function __autoload($className){
    $className = str_replace('..', '', $className);
    require_once("classes/$className.php");
}





$departureWaitingRoom = [];
$departureWaitingRoom[] = new Putnik('Zoran', 'Kovacev', 80, false);
$departureWaitingRoom[] = new Putnik('Zoranaa', 'Kovacev', 50, false);

for ($i=0; $i < 8; $i++) { 
    $departureWaitingRoom[] = new putnikCreator;
}



    




$airplane = [];
$arrival = [];
















require 'index.view.php';
?>