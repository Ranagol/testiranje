<?php

function __autoload($className){
    $className = str_replace('..', '', $className);
    require_once("classes/$className.php");
}


require 'index.view.php';

?>