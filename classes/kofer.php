<?php

class Kofer{

    private $tezinaKofera;
    private $vrstaKofera;
    private $sansaDaSeIzgubi;
    private $imeVlasnika;
    private $koferIzgubljen = false;
    private $platitiNadoknadaZaIzgubljenKofer = false;

    public function __construct(){
        $this->namestiTezinuKofera();
        $this->namestiVrstuKofera();
        $this->namestiSansuDaSeIzgubi();
        $this->namestiImeVlasnika();
    }

    public function namestiTezinuKofera(){
        $this->tezinaKofera = rand(1,5);
    }

    public function namestiVrstuKofera(){
        if ($this->tezinaKofera < 2) {
            $this->vrstaKofera = 'mali kofer';
        } else {
            $this->vrstaKofera = 'veliki kofer';
        }
    }


    public function namestiSansuDaSeIzgubi(){
        if ($this->vrstaKofera == 'mali kofer') {
            $this->sansaDaSeIzgubi = 10;
        } else {
            $this->sansaDaSeIzgubi = 30;
        }
    }


    public function namestiImeVlasnika(){
        $this->imeVlasnika = 'Ime vlasnika fukcija jos nije izradjen.';
    }


    public function daLiSeKoferIzgubio(){//ovo ce se simulirati na kraju puta
        $verovatnoca = rand(1,100);
        if ($this->sansaDaSeIzgubi > $verovatnoca){
            $this->koferIzgubljen = true;
        }
    }

    public function daLiPlatitiNadoknaduZaIzgubljenKofer(){//ovo ce se simulirati na kraju puta
        if ($this->vrstaKofera == 'veliki kofer' && $this->koferIzgubljen == true) {
            $this->platitiNadoknadaZaIzgubljenKofer = true;
        }
    }


}



?>