<?php 

class PutnikCreator{
    public $imePutnika;
    public $prezimePutnika;
    public $kilazaPutnika;
    public $zabranaZaLetenje = false;
    public $prtljagVrsta;
    public $prtljagTezina;

    function randomImePutnika() {
        $names = array(
            'Zdravko',
            'Bojan',
            'Dragan',
            //itd...
    
        );
        return $names[rand ( 0 , count($names) -1)];
    }

    function randomPrezimePutnika() {
        $names = array(
            'Kovac',
            'Stojanovic',
            'Babic',
            //itd...
    
        );
        return $names[rand ( 0 , count($names) -1)];
    }

    public function namestiKilazuPutnika(){
        $this->$kilazaPutnika = rand( 20,100);
    }

    public function zabranaZaLetenjeSetup(){
        $verovatnoca = rand( 0,100);
        if ($verovatnoca < 30) {
            $this->zabranaZaLetenje = true;
        }
    }

    

    public function napraviPutnika(){
        $putnik = new Putnik($this->randomImePutnika, $this->randomPrezimePutnika, $this->kilazaPutnika, $this->zabranaZaLetenje);
        return $putnik;
    }


    /*
    public function namestiPrtljagTezinu(){
        $this->prtljagTezina =  rand( 1,5);
    }

    public function namestiPrtljagVrstu(){
        if ($this->prtljagTezina < 2) {
            $this-> prtljagVrsta = 'rucniPrtljag';
        } else {
            $this-> prtljagVrsta = 'prtljagZaPrtljaznik';
        }
    }
    */



}



?>