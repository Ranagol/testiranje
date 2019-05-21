<?php

class Putnik{
    protected $ime;
    protected $prezime;
    protected $kilazaPutnika;
    private $noFly;
    protected $putnikJeUAvionu = false;


    protected function __construct($ime, $prezime, $kilazaPutnika){
        $this-> $ime = $ime;
        $this-> $prezime = $prezime;
        $this-> $kilazaPutnika = $kilazaPutnika;
    }

    protected function putnikJeUsaoUAvion(){
        $this-> putnikJeUAvionu = true;
        $logovanje = new LogWriterPutnik($ime, prezime);
        $logovanje->createLog();
    }

    

    

    

    


}


?>