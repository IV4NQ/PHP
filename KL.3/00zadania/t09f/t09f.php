<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>
    Napisz program, który do dwuwymiarowej tablicy o wymiarach 7x7 wpisuje pseudolosowe liczby całkowite z zakresu
    <10,99> i wyświetla tę tablicę z zachowaniem wierszy i kolumn.

    <br>Liczby nie mogą się powtarzać.
</p>
<hr>
<p>Autor: Łukasz Iwaniec 3ip_02</p>
<hr>

<?php

function generujUnikalnaLiczbe(&$uzyteLiczby){

    do {
        $liczba = mt_rand(10, 99);
    } while (in_array($liczba, $uzyteLiczby));

    $uzyteLiczby[] = $liczba;
    return $liczba;
}

$uzyteLiczby = [];
$koncowaTablica = [];

for ($i = 0; $i < 7; $i++) {
    $wiersz = [];
    for ($j = 0; $j < 7; $j++) {
        $wiersz[] = generujUnikalnaLiczbe($uzyteLiczby);
    }
    $koncowaTablica[] = $wiersz;
}


for ($i = 0; $i < 7; $i++) {
    for ($j = 0; $j < 7; $j++) {
        echo $koncowaTablica[$i][$j] . " ";
    }
    echo "<br>";
}
?>
</body>
</html>
