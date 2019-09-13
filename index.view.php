<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Vivify avionski zadatak</title>
</head>
<body>

<h1>Vivify avionski zadatak</h1>

<h2>Podaci avionskog leta</h2>
<p>
<?php
    echo $avionskiLet->pokaziNazivLeta() . '<br>';
    echo 'Dozvoljenja maksimalna težina putnika i pilota je ' . $avionskiLet->pokaziLimitTezinu() . ' kg.' . '<br>';
    echo 'Ukupna tezina svih kofera je ' . $avionskiLet->pokaziUkupnuTezinuKofera(). ' kg.' . '<br>';
    echo 'Ukupna tezina svih putnika i pilota je ' . $avionskiLet->pokaziUkupnuTezinuPutnika() .' kg.' . '<br>';
    
    
    $ukupnaTezina = $avionskiLet->pokaziUkupnuTezinuPutnika()+$avionskiLet->pokaziUkupnuTezinuKofera();
    echo 'Ukupno izmereno opterećenje (putnici+piloti+koferi) aviona je ' . $ukupnaTezina  .' kg.' . '<br>';
    
    if ($avionskiLet->pokaziLimitTezinu() < $ukupnaTezina) {
        echo 'Opterecenje aviona je preveliko. Posalji putnike na dijetu. Avion ne sme da poleti.'. '<br>';
    } else {
        echo 'Opterecenje aviona je u skladu sa pravilima. Avion sme da poleti.'. '<br>';
    }
    echo 'Broj putnika je (zajedno sa pilotima): ' . $avionskiLet->brojPutnikaUAvionu . ' osoba. <br>';

    //pilot u zatvoru opcija
    if (!empty($zatvor)) {
        echo 'Blic novine: SKANDALOZNO! Pilot nije imao licencu za rad! <br>';
        echo 'Telegraf novine: SKANDALOZNO! Pilot nije imao licencu za rad! Ovo je zavera protiv Srbije! <br>';
        foreach ($zatvor as $zatvorenik){
            echo 'Tanjug: Ovaj pilot nije imao licencu za rad, i zato je kloniran na brzinu i njegov klon je poslat u zatvor: ' . $zatvorenik;
        }
    }
    
?>
</p>

<p>
<h2>Spisak svih putnika i pilota iz cekaonice:</h2>
<ol>
    <?php
        foreach ($departureWaitingRoom as $putnik) {
            echo '<li>';
            echo $putnik . '<br>';
            //ako kod putnika postoji zabrana za letenje, i ako je to true, onda echo: Ovaj putnik ima zabranu za letenje!
            if (isset($putnik->zabranaZaLetenje)) {
                if ($putnik->getZabranaZaLetenjeStatus() == true) {
                    echo 'Ovaj putnik je na NO-FLY listi!!'. '<br>';
                }
            }
                
            $putnik->mojKoferJeTu->pokaziKofer();
            echo '</li>';
        }
    ?>
</ol>
</p>

<p>
<h2>Putnici sa No-fly liste koji će imati dugačak informativni razgovor sa security i neće leteti :) </h2>
<ol>
    <?php
        foreach ($noFlyList as $putnik) {
            echo '<li>';
            echo $putnik . '<br>';
            echo 'Ovaj je na nofly listi i ne možemo ga pustiti na avion. <br>'; 
            echo '</li>';
        }
    ?>
</ol>
</p>

<p>
<h2>Spisak pilota i putnika (zajedno sa koferima) ukrcanih u avion:</h2>
<ol>
    <?php
        foreach ($airplane as $section) {
            foreach ($section as $person) {
                echo '<li>';
                echo $person . '<br>';
                $person->mojKoferJeTu->pokaziKofer();
                echo '</li>';
            }
        }
        //var_dump($airplane['kokpit']); 
        //var_dump($airplane['putnickiDeo']);
    ?>
</ol>
</p>

<p>
<h2>Spisak pilota i putnika koji su stigli na odrediste:</h2>
<ol>
    <?php
       
        foreach ($arrival as $person) {
            echo '<li>';
            echo $person . '<br>';
            $person->mojKoferJeTu->pokaziKofer();
            echo $person->mojKoferJeTu->nadoknada();
            echo '</li>';
        }
        //var_dump($arrival);    
    ?>
</ol>
</p>



<h2>Odsek za izgubljene prtljage i naknade</h2>


<?php

    $ovimaPlatitiNadoknadu = [];//ovde cemo staviti osobe sa izgubljenim koferima sa pravom na naknadu
    foreach ($arrival as $person) {
    //ako treba platiti nadoknadu za kofer, onda ga dodaj u array $izgubljeniKoferi
        if($person->mojKoferJeTu->platitiNadoknaduZaIzgubljenKofer) {
            $ovimaPlatitiNadoknadu[] = $person;        
        }
    }    
    //var_dump($ovimaPlatitiNadoknadu); 

?>

Imena putnika čiji predati veliki kofer je izgubljen (kompanija ne odgovara za ručni prtljag), i kome ce biti placena naknada:
<ol>
    <?php
        foreach ($ovimaPlatitiNadoknadu as $person) {
            echo '<li>';
            echo $person;
            echo '</li>';
        }
    ?>
</ol>







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>