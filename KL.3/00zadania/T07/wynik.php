<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T07 - średnia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="wynik">

    <?php
    $imie = $_POST['imie'];
    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];
    $liczba3 = $_POST['liczba3'];
    $liczba4 = $_POST['liczba4'];


    function dodajLiczbe($liczba, &$tab)
    {
        if (is_numeric($liczba)) {
            $tab[] = (int)$liczba;
        }
    }

    $przetworzone_liczby = array();

    dodajLiczbe($liczba1, $przetworzone_liczby);
    dodajLiczbe($liczba2, $przetworzone_liczby);
    dodajLiczbe($liczba3, $przetworzone_liczby);
    dodajLiczbe($liczba4, $przetworzone_liczby);

    echo "<h2>Witaj $imie na mojej stronie!!!</h2> <br>";

    echo "Przetworzone liczby: ";
    var_dump($przetworzone_liczby);

    $suma = array_sum($przetworzone_liczby);
    $liczba_elementow = count($przetworzone_liczby);


    if ($liczba_elementow > 0) {
        $srednia = $suma / $liczba_elementow;
        echo "<br> <h3> Suma: $suma </h3>";
        echo " <h3> Średnia: $srednia </h3>";
    } else {
        echo "<br> <h3>Nie podano poprawnych liczb do obliczeń.</h3>";
    }
    ?>
</section>
</body>
</html>