<?php

class AvionskiLet {
    private $nazivLeta;
    public $spisakPutnika = [];
    private $limitBrojOsoba = 12;
    private $BrojOsobaUAvionu;
    private $limitTezina = 1100;
    private $ukupnaTezinaUAvionu;

    public function kreirajNazivLeta(){
        $this->nazivLeta = 'NAZIV LETA: ' . date('h:i:s - d.m.Y');
    }

    public function pokaziNazivLeta(){
        return $this->nazivLeta;
    }

    public function kreirajSpisakPutnika(){///////////////////////////////////////////////////////////////////

    }

    public function proveriUkupnuTezinu(){

    }

    public function proveriBrojPutnika(){

    }

    
}




?>