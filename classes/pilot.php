<?php

class Pilot extends Person {

    private $zanimanje = 'PILOT';
    private $imaLicencuZaRad;
    public $mojKoferJeTu;
    
    public function __construct(){
        $this->ime = $this->randomIme();
        $this->prezime = $this->randomPrezime();
        $this->kilaza = $this->namestiKilazu();
        $this->imaLicencuZaRad = $this->licencaZaRadSetup();
        $this->mojKoferJeTu = new Kofer;
    }

    public function __toString(){
        return $this->zanimanje . '. Ime: ' . $this->ime . ' Prezime: ' . $this->prezime . ' Kilaza: ' . $this->kilaza . ' kg.' . ' Licenca za rad:' . $this->imaLicencuZaRad;
    }

    public function licencaZaRadSetup(){
        $verovatnoca = rand( 0,100);
        if ($verovatnoca < 5) {//bilo na 5%, podignutno na 80% za testiranje NemaLicencu Exceptiona
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