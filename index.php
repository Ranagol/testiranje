<?php

function __autoload($className){
    $className = str_replace('..', '', $className);
    require_once("classes/$className.php");
}



$departureWaitingRoom = [];
$noFlyList = [];
$airplane = [];
$arrival = [];

$kofer = new Kofer;
var_dump($kofer);

//KREIRANJE AVIONSKOG LETA
$avionskiLet = new AvionskiLet;
$avionskiLet->kreirajNazivLeta();

//PILOTI SU STVORENI U CEKAONI
for ($i=0; $i < 2; $i++) { 
    $departureWaitingRoom[] = new Pilot;//kreiramo automatski pilote da budu u cekaonici
}

//PUTNICI SU STVORENI U CEKAONI
for ($i=0; $i < 10; $i++) { 
    $departureWaitingRoom[] = new Putnik;//kreiramo automatski putnike da budu u cekaonici
}

//PUTNICI I PILOTI SE PROVERAVAJU U CEKAONI, I AKO JE SVE OK, ONDA SE PREBACUJU U AVION
foreach ($departureWaitingRoom as $putnik) {
    $avionskiLet->ukupnaTezinaRacunaj($putnik);
    if ($putnik instanceof Putnik) {//ako se radi o putniku...
        if ($putnik->getZabranaZaLetenjeStatus() === true) {
            $noFlyList[] = $putnik; 
        } else {
            $airplane[] = $putnik;//kopiraj putnika iz cekaonice u avion
            $avionskiLet->spisakPutnika[] = $putnik->pokaziIme();//napravi jos jedan spisak putnika za AvionskiLet
            $avionskiLet->ukupnaTezinaRacunaj($putnik);//racunanje ukupnog opterecenja aviona
            $avionskiLet->povecajBrojPutnikaSaJedan();
        }
    } else {//ako nije putnik, nego se radi o pilotu
        if ($putnik->getLicencaZaRadStatus() === false) {
            echo '<br> Ovaj pilot nema licencu za rad! Salji u zatvor! <br>';
            var_dump($putnik);
        } else {
            $airplane[] = $putnik;//kopiraj pilota iz cekaonice u avion
            $avionskiLet->ukupnaTezinaRacunaj($putnik);
            $avionskiLet->povecajBrojPutnikaSaJedan();
        }    
    }                                              
}
//var_dump($avionskiLet->spisakPutnika);//ovo je samo nacin da se proveri da li AvionskiLet ima u sebi spisak putnika. Nema neku bitnu funkciju, ali je trazeno u zadatku.






//AVION STIGAO NA ODREDISTE. PUTNICI SE PREBACUJU NA ODREDISTE

foreach ($airplane as $putnik) {
    $arrival[] = $putnik;//kopiraj putnika (i pilota) na odrediste
}


















require 'index.view.php';
?>