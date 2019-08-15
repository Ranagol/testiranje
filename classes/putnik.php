<?php

class Putnik extends Person{

    private $zabranaZaLetenje;
    
    public function __construct(){
        $this->ime = $this->randomIme();
        $this->prezime = $this->randomPrezime();
        $this->kilaza = $this->namestiKilazu();
        $this->zabranaZaLetenje = $this->zabranaZaLetenjeSetup();
    }

    public function __toString(){
        return 'Ime: ' . $this->ime . ' Prezime: ' . $this->prezime . ' Kilaza: ' . $this->kilaza .  ' No fly list:' . $this->zabranaZaLetenje;
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