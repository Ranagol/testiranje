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
<?php
    echo $avionskiLet->pokaziNazivLeta() . '<br>';
    echo 'Dozvoljenja maksimalna težina putnika i pilota je ' . $avionskiLet->pokaziLimitTezinu() . ' kg.' . '<br>';
    //ukupno izmereno opterecenje aviona je X, i zato ovaj avion sme da poleti---ne sme da poleti, obavezno smanji tezinu
    echo 'Ukupno izmereno opterećenje aviona je ' . $avionskiLet->pokaziUkupnuTezinuLeta() .' kg.' . '<br>';
    if ($avionskiLet->pokaziLimitTezinu() < $avionskiLet->pokaziUkupnuTezinuLeta()) {
        echo 'Opterecenje aviona je preveliko. Posalji putnike na dijetu. Avion ne sme da poleti.'. '<br>';
    } else {
        echo 'Opterecenje aviona je u skladu sa pravilima. Avion sme da poleti.'. '<br>';
    }
    echo 'Broj putnika je (zajedno sa pilotima): ' . $avionskiLet->brojPutnikaUAvionu . ' osoba.';
?>



<h2>Spisak svih putnika i pilota iz cekaonice:</h2>
<ol>
    <?php
        foreach ($departureWaitingRoom as $putnik) {
            echo '<li>';
            echo $putnik . '<br>';
            echo '</li>';
        }
    ?>
</ol>

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



<h2>Spisak pilota i putnika ukrcanih u avion:</h2>
<ol>
    <?php
        foreach ($airplane as $putnik) {
            echo '<li>';
            echo $putnik . '<br>';
            echo '</li>';
        }
    ?>
</ol>


<h2>Spisak pilota i putnika koji su stigli na odrediste:</h2>
<ol>
    <?php
        foreach ($arrival as $putnik) {
            echo '<li>';
            echo $putnik . '<br>';
            echo '</li>';
        }
    ?>
</ol>



    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>