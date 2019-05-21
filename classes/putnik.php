<?php

class Putnik{
    public $ime;
    public $prezime;
    public $kilazaPutnika;
    public $zabranaZaLetenje;
    protected $putnikJeUAvionu = false;


    protected function __construct($ime, $prezime, $kilazaPutnika, $zabranaZaLetenje = null){
        $this-> ime = $ime;
        $this-> prezime = $prezime;
        $this-> kilazaPutnika = $kilazaPutnika;
        $this-> zabranaZaLetenje = $zabranaZaLetenje;
    }

    protected function putnikJeUsaoUAvion(){
        $this-> putnikJeUAvionu = true;
        $logovanje = new LogWriterPutnik($ime, prezime);
        $logovanje->createLog();
    }

    

    

    

    


}


?>