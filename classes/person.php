<?php

abstract class Person{
    public $ime;
    public $prezime;
    public $kilaza;
    

    public function __construct(){
        $this->ime = $this->randomIme();
        $this->prezime = $this->randomPrezime();
        $this->kilaza = $this->namestiKilazu();      
    }


    public function randomIme() {
        $names = array(
            'Zdravko',
            'Bojan',
            'Dragan',
            'Marko',
            'Vuk',
            'Marjan',
            //itd...
    
        );
        return $names[rand ( 0 , count($names) -1)];
    }

    public function randomPrezime() {
        $names = array(
            'Kovac',
            'Stojanovic',
            'Babic',
            'Horvat',
            'Barna',
            'Losonc',
            'Daraz',
            //itd...
    
        );
        return $names[rand ( 0 , count($names) -1)];
    }

    public function namestiKilazu(){
        return rand( 20,100);
    }

    public function pokaziIme(){
        return $this->ime . ' ' . $this->prezime;
    }

    public function pokaziKilazu(){
        return $this->kilaza;
    }

}


?>