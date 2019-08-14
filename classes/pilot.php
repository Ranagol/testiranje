<?php

class Pilot extends Person {

    private $zanimanje = 'PILOT';
    private $imaLicencuZaRad;
    
    public function __construct(){
        $this->ime = $this->randomIme();
        $this->prezime = $this->randomPrezime();
        $this->kilaza = $this->namestiKilazu();
        $this->imaLicencuZaRad = $this->licencaZaRadSetup();
    }

    public function __toString(){
        return $this->zanimanje . '. Ime: ' . $this->ime . ' Prezime: ' . $this->prezime . ' Kilaza: ' . $this->kilaza . ' Licenca za rad:' . $this->imaLicencuZaRad;
    }

    public function licencaZaRadSetup(){
        $verovatnoca = rand( 0,100);
        if ($verovatnoca < 5) {
            $this->imaLicencuZaRad = false;
        } else {
            $this->imaLicencuZaRad = true;
        }
        return $this->imaLicencuZaRad;
    }

    public function getLicencaZaRadStatus(){
        return $this->imaLicencuZaRad;
    }
}



?>