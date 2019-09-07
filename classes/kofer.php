<?php

class Kofer{//napomena: koferi ce se stvarati automatski istovremeno sa putnicima, u putnik __construct.

    private $tezinaKofera;
    private $vrstaKofera;
    public $sansaDaSeIzgubi;
    private $imeVlasnika;
    private $gdeSeSkladisti;
    public $koferIzgubljen = false;
    public $platitiNadoknaduZaIzgubljenKofer = false;

    public function __construct(){
        $this->namestiTezinuKofera();
        $this->namestiVrstuKofera();
        $this->namestiImeVlasnika();//ovo jos ne radi!
    }

    public function namestiTezinuKofera(){
        $this->tezinaKofera = rand(1,5);
    }

    public function namestiVrstuKofera(){
        if ($this->tezinaKofera < 2) {
            $this->vrstaKofera = 'mali kofer';
            $this->gdeSeSkladisti = 'rucni prtljag';
            $this->sansaDaSeIzgubi = 10;
        } else {
            $this->vrstaKofera = 'veliki kofer';
            $this->gdeSeSkladisti = 'teretni deo aviona';
            $this->sansaDaSeIzgubi = 30;
        }
    }

    public function namestiImeVlasnika(){
        $this->imeVlasnika = 'Ime vlasnika fukcija jos nije izradjena.';
    }

    public function __toString(){
        return 'Tezina kofera: ' . $this->tezinaKofera . ' kg. Vrsta kofera: ' . $this->vrstaKofera . '. Mesto skladistenja kofera: ' . $this->gdeSeSkladisti . '.';
    }

    public function pokaziKofer(){
        echo 'KOFER. Tezina kofera: ' . $this->tezinaKofera . ' kg. Vrsta kofera: ' . $this->vrstaKofera . '. Mesto skladistenja kofera: ' . $this->gdeSeSkladisti . '.';
    }

    public function pokaziTezinuKofera(){
        return $this->tezinaKofera;
    }


    public function daLiSeKoferIzgubio(){//ovo ce se simulirati na kraju puta
        $verovatnoca = rand(1,100);
        if ($this->sansaDaSeIzgubi > $verovatnoca){
            $this->koferIzgubljen = true;
        }
    }

    public function daLiPlatitiNadoknaduZaIzgubljenKofer(){//ovo ce se simulirati na kraju puta
        if ($this->vrstaKofera == 'veliki kofer' && $this->koferIzgubljen == true) {
            $this->platitiNadoknaduZaIzgubljenKofer = true;
        }
    }

    public function nadoknada(){
        if ($this->koferIzgubljen == true) {
            echo 'Kofer NIJE izgubljen. Ne placa se nadoknada, hurray!';
        } else {
            echo 'Kofer je IZGUBLJEN. ';
            if ($platitiNadoknaduZaIzgubljenKofer = true) {
                echo 'Za ovaj kofer se mora platiti nadoknada!';
            }
        }
    }


}



?>