<?php

class Putnik extends Person{

    public $zabranaZaLetenje;
    public $mojKoferJeTu;
    
    public function __construct(){
        $this->ime = $this->randomIme();
        $this->prezime = $this->randomPrezime();
        $this->kilaza = $this->namestiKilazu();
        $this->zabranaZaLetenje = $this->zabranaZaLetenjeSetup();
        $this->mojKoferJeTu = new Kofer;
    }

    public function __toString(){
        return 'Ime: ' . $this->ime . ' Prezime: ' . $this->prezime . ' Tezina putnika: ' . $this->kilaza . ' kg.';
        //' No fly list:' . $this->zabranaZaLetenje;
    }

    public function zabranaZaLetenjeSetup(){
        $verovatnoca = rand( 0,100);
        if ($verovatnoca < 30) {
            $this->zabranaZaLetenje = true;
        } else {
            $this->zabranaZaLetenje = false;
        }
        return $this->zabranaZaLetenje;
    }

    public function getZabranaZaLetenjeStatus(){
        return $this->zabranaZaLetenje;
    }

    


}


?>