<?php

class Prtljag{
    protected $kilaza;
    protected $prtljagIzgubljen;
    protected $prtljagJeUAvionu = false;

    protected function __construct($imeVlasnika, $prezimeVlasnika, $kilaza){
        $this->imeVlasnika = $imeVlasnika;
        $this->prezimeVlasnika = $prezimeVlasnika;
        $this-> kilaza = $kilaza;
    }

    protected function prtljagIzgubljen(){
        $this-> prtljagIzgubljen = true;
    }

    protected function prtljagNijeIzgubljen(){
        $this-> prtljagIzgubljen = false;
    }

    protected function prtljagJeUpakovanUAvion(){
        $this->prtljagJeUAvionu = true;
    }

    public function zaPrtljaznik() {
        return $kilaza > 2;//Losi
    }
}



?>