<?php

class NemaLicencuException extends Exception{

    public function errorMessage(){
        return 'Nazalost imamo slucaj da jedan od pilota nema licencu za rad. Izvinjavamo se zbog bilo kakvih predstojecih neudobnosti.';
    }  


}




?>