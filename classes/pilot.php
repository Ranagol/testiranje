<?php

class Pilot{
    protected $ime;
    protected $prezime;
    protected $kilazaPilota;
    protected $licencaZaRad;

    protected function __construct($ime, $prezime, $kilazaPilota){
        $this-> ime = $ime;
        $this-> prezime = $prezime;
        $this-> kilazaPilota = $kilazaPilota;
    }

    


}


?>