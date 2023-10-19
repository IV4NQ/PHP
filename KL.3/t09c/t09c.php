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
<p>Napisz program, który do dwuwymiarowej tablicy o wymiarach 7 x 7 wpisze wygenerowane losowo znaki w zakresie
    <'a','e'>, wyświetli tę tablicę, a następnie:

    <br>wypisze ile razy w tablicy wystąpiła litera 'a',
    <br>wyświetli te numery wierszy, w których najczęściej wystąpiła litera 'b'.</p>
<hr>
<p>Autor: Łukasz Iwaniec 3ip_02</p>
<hr>
<?php

function losowyZnak()
{
    $znaki = ['a', 'b', 'c', 'd', 'e'];
    return $znaki[array_rand($znaki)];
}


$tablica = array();
for ($i = 0; $i < 7; $i++) {
    $tablica[$i] = array();
    for ($j = 0; $j < 7; $j++) {
        $tablica[$i][$j] = losowyZnak();
    }
}
echo "<br> Tablica ze znakami<br>";
for ($i = 0; $i < 7; $i++) {
    for ($j = 0; $j < 7; $j++) {
        echo $tablica[$i][$j];
        echo " ";
    }
    echo "<br>";
}


$liczbaA = 0;
for ($i = 0; $i < 7; $i++) {
    for ($j = 0; $j < 7; $j++) {
        if ($tablica[$i][$j] === 'a') {
            $liczbaA++;
        }
    }
}
echo "<br> Ilość wystąpień litery 'a': $liczbaA <br>";


$najczestszyWiersz = 0;
$maxWystapienB = 0;
for ($i = 0; $i < 7; $i++) {
    $wystapienB = 0;
    for ($j = 0; $j < 7; $j++) {
        if ($tablica[$i][$j] === 'b') {
            $wystapienB++;
        }
    }
    if ($wystapienB > $maxWystapienB) {
        $maxWystapienB = $wystapienB;
        $najczestszyWiersz = $i + 1;
    }
}

echo "Najczęściej litera 'b' występuje w wierszu " . ($najczestszyWiersz);
echo "<br>";


?>
</body>
</html>


