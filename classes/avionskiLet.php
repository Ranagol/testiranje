<?php

class AvionskiLet {
    private $nazivLeta;
    public $spisakPutnika = [];
    private $limitBrojOsoba = 12;
    public $brojPutnikaUAvionu;
    private $limitTezina = 1100;
    private $tezinaArray = [];
    private $ukupnaTezina;

    public function kreirajNazivLeta(){
        $this->nazivLeta = 'NAZIV LETA: ' . date('h:i:s - d.m.Y');
    }

    public function pokaziNazivLeta(){
        return $this->nazivLeta;
    }

    public function ukupnaTezinaRacunaj($putnik){
        $this->tezinaArray[] = $putnik->pokaziKilazu();
        $this->ukupnaTezina = array_sum($this->tezinaArray);
    }

    public function pokaziUkupnuTezinuLeta(){
        return $this->ukupnaTezina;
    }

    public function pokaziLimitTezinu(){
        return $this->limitTezina;
    }
    

    public function povecajBrojPutnikaSaJedan(){
        $this->brojPutnikaUAvionu++;
    }

    public function pokaziBrojPutnika(){
        return $this->brojPutnikaUAvionu;
    }

    
}




?>