<?php 

class PutnikCreator{

    private $ime;
    private $prezime;
    public $kilazaPutnika;
    public $zabranaZaLetenje;

    public function randomImePutnika() {
        $names = array(
            'Zdravko',
            'Bojan',
            'Dragan',
            //itd...
    
        );
        return $names[rand ( 0 , count($names) -1)];
    }

    public function randomPrezimePutnika() {
        $names = array(
            'Kovac',
            'Stojanovic',
            'Babic',
            //itd...
    
        );
        return $names[rand ( 0 , count($names) -1)];
    }

    public function namestiKilazuPutnika(){
        return rand( 20,100);
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

    public function __toString(){
        return 'Ime: ' . $this->ime . ' Prezime: ' . $this->prezime . ' Kilaza: ' . $this->kilazaPutnika . ' No fly list:' . $this->zabranaZaLetenje;
    }

    public function __construct(){
        $this->ime = $this->randomImePutnika();
        $this->prezime = $this->randomPrezimePutnika();
        $this->kilazaPutnika = $this->namestiKilazuPutnika();
        $this->zabranaZaLetenje = $this->zabranaZaLetenjeSetup();
        $x = new Putnik($this->ime, $this->prezime, $this->kilazaPutnika, $this->zabranaZaLetenje);
        return $x;
    }

}

$y = new PutnikCreator;
var_dump($y);

?>