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

<h2>Spisak putnika i pilota iz cekaonice:</h2>
<ol>
    <?php
        foreach ($departureWaitingRoom as $putnik) {
            echo '<li>';
            echo $putnik . '<br>';
            echo '</li>';
            if ($putnik instanceof Putnik) {
                if ($putnik->getZabranaZaLetenjeStatus() === true) {
                    echo '<br> Ovaj je na nofly listi i ne možemo ga pustiti na avion. <br>';               
                    var_dump($putnik);
                } else {
                    $airplane[] = $putnik;//kopiraj putnika iz cekaonice u avion 
                }
            } else {
                if ($putnik->getLicencaZaRadStatus() === false) {
                    echo '<br> Ovaj pilot nema licencu za rad! Salji u zatvor! <br>';
                    var_dump($putnik);
                } else {
                    $airplane[] = $putnik;//kopiraj pilota iz cekaonice u avion
                }    
            }                                              
        }
    ?>
</ol>



<h2>Spisak putnika iz aviona:</h2>
<ol>
    <?php
        foreach ($airplane as $putnik) {
            echo '<li>';
            echo $putnik . '<br>';
            echo '</li>';
            $arrival[] = $putnik;//kopiraj putnika na odrediste
        }
    ?>
</ol>


<h2>Spisak putnika koji su stigli na odrediste:</h2>
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