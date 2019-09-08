<?php

class AvionskiLet {
    private $nazivLeta;
    public $spisakPutnika = [];
    private $limitBrojOsoba = 12;
    public $brojPutnikaUAvionu;
    private $limitTezina = 1000;
    private $tezinaArray = [];
    private $ukupnaTezina;
    private $tezinaArrayKofer = [];
    private $ukupnaTezinaKofera;

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

    public function ukupnaTezinaKofera($koferObject){
        $this->tezinaArrayKofer[] = $koferObject->pokaziTezinuKofera();
        $this->ukupnaTezinaKofera = array_sum($this->tezinaArrayKofer);
    }

    public function pokaziUkupnuTezinuKofera(){
        return $this->ukupnaTezinaKofera;
    }


    public function pokaziUkupnuTezinuPutnika(){
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