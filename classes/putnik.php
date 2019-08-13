<?php

class Putnik{
    private $ime;
    private $prezime;
    private $kilazaPutnika;
    public $zabranaZaLetenje;



    public function __construct($ime, $prezime, $kilazaPutnika = null, $zabranaZaLetenje = null){
        $this-> ime = $ime;
        $this-> prezime = $prezime;
        $this-> kilazaPutnika = $kilazaPutnika;
        $this-> zabranaZaLetenje = $zabranaZaLetenje;
    }

    public function __toString(){
        return 'Ime: ' . $this->ime . ' Prezime: ' . $this->prezime . ' Kilaza: ' . $this->kilazaPutnika . ' No fly list:' . $this->zabranaZaLetenje;
    }


    

    

    

    


}


?>